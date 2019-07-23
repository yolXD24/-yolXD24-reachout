<?php 
ini_set('display_errors',1);    
header("Access-Control-Allow-Origin: *");
session_start();
include "config.php";
include 'accts.php';
global $idS;
// print($idS);
$sql = "SELECT * FROM tblReport order by Date DESC where idBarangay = '$idS ' or 1 = 1";
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
    }else{

        echo "There is no Reports recieved at the moment.";
    }

    echo json_encode($notifObj,JSON_UNESCAPED_SLASHES); 

$link->close();

?>
