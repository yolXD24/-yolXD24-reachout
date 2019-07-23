<?php 
session_start();
// ini_set('display_errors',1);    
header("Access-Control-Allow-Origin: *");
include "config.php";

$sql = "SELECT * FROM tblReport where IdBarangay = ".$_SESSION['userlog']." order by Date DESC";
$notifObj = array();
    $result = $link->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            $json_array['Date'] = $row['Date'];  
            $json_array['ReportSubject'] = $row['ReportSubject'];  
            $json_array['IdReport']= $row['IdReport'];   
            $json_array['status'] = (int)$row['status'];      
            array_push($notifObj,$json_array); 
        }
        // echo  $_SESSION['user'];

        echo json_encode($notifObj,JSON_UNESCAPED_SLASHES); 
    }else{

        echo  '0'. $IDB;
    }

  

$link->close();

?>
