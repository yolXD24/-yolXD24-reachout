<?php 
ini_set('display_errors',0);    
header("Access-Control-Allow-Origin: *");
include "config.php";

$linker  = "https://www.google.com.ph/maps/place/";


$query = "SELECT BarangayName, count(tblReport.IdBarangay) as rate FROM tblReport join tblBarangay on tblReport.IdBarangay = tblBarangay.IdBarangay GROUP by tblReport.IdBarangay order by count(tblReport.IdBarangay) desc limit 10"; 
$result = $link->query($query);
$chartData = array(); 

if($result->num_rows > 0){ 
    while($row = $result->fetch_assoc()){ 
        $linkd = $linker.$row['BarangayName'];
        $json_array['y'] = (int)$row['rate'];  
        $json_array['label'] = $row['BarangayName'];  
        array_push($chartData,$json_array); 
    } 
} 

echo json_encode($chartData,JSON_UNESCAPED_SLASHES , JSON_NUMERIC_CHECK); 

$link->close();

?>