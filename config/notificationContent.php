<?php 
session_start();
ini_set('display_errors',1);  
header("Access-Control-Allow-Origin: *");
include "config.php";
$id = $_POST['id']; 
include 'accts.php';
global $idS;
$notifContent = array();

$sql = "SELECT Name , Date , BarangayName , DistrictNo ,ReportSubject , ReportContent FROM tblReport r 
        join tblBarangay br on r.IdBarangay = br.IdBarangay join tblDistrict dis on
        br.IdDistrict = dis.IdDistrict  where r.IdReport ='$id' and r.idBarangay = '$idS '";
        $result = $link->query($sql);
        if ($result->num_rows > 0) {                                       
        while ($row = $result->fetch_assoc()) {
            $json_array['Date'] = $row['Date'];        
            $json_array['Name'] = $row['Name'];        
            $json_array['BarangayName'] = $row['BarangayName'];        
            $json_array['DistrictNo'] = $row['DistrictNo'];        
            $json_array['ReportSubject'] = $row['ReportSubject'];        
            // $json_array['IpAddress'] = $row['IpAddress'];        
            $json_array['ReportContent'] = $row['ReportContent'];        
            array_push($notifContent,$json_array); 
    }
    echo json_encode($notifContent,JSON_UNESCAPED_SLASHES,JSON_NUMERIC_CHECK); 
   
}else{
    echo "error"; 
}
 $link->close();

?>
