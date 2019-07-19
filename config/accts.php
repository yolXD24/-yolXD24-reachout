<?php 
session_start();
header("Access-Control-Allow-Origin: *");
$searchTerm = $_POST['value']; 
$_SESSION['user'] = $searchTerm ;
echo $_SESSION['user'];
?>