<?php
session_start();
require_once "config.php";
$username = $_POST["email"];
$pwd = $_POST["pw"];   
$resp = null;
$sql1 = "SELECT * from tblAccount where username = '$username' AND password = '$pwd'";
$result = $link->query($sql1);
if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        $_SESSION["login"] = true;
        $_SESSION['userlog'] = $row['IdBarangay'];
        $resp = 1;
    }
} else {
    $resp = 0;
}

echo $resp;
$link->close();

?>
