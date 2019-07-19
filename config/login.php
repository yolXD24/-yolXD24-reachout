<?php
session_start();
ini_set('display_errors', 1);
require_once "config.php";
$email = $_POST["email"];
$pwd = $_POST["pw"];   

$password = md5($pwd);

$resp = null;


$sql1 = "SELECT* from tblAccount where username = $username && password = $password";
$result = $link->query($sql1);
if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        $_SESSION["ClassNumber"] = $row['ClassNumber'];
        $_SESSION["login"] = true;
        $_SESSION['userlog'] = 1;
        $resp  =  $row['Status'];
    }
} else {
    $resp = 0;
}
if ($resp  == 'True') {
    $_SESSION["login"] = false;    
}
    echo $resp;
$link->close();

?>