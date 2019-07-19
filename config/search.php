<?php 
header("Access-Control-Allow-Origin: *");
include "config.php";   
$searchTerm = $_POST['term']; 
 
// Fetch matched data from the database 
$query = $link->query("SELECT BarangayName FROM tblBarangay WHERE BarangayName LIKE '".$searchTerm."%' limit 10"); 
 
// Generate array with skills data 
$skillData = array(); 
if($query->num_rows > 0){ 
    while($row = $query->fetch_assoc()){ 
        array_push($skillData, $row['BarangayName']); 
    } 
}
// Return results as json encoded array 
echo json_encode(array_unique($skillData)); 

$link->close();

?>