<?php
define('DB_SERVER', 'remotemysql.com');
define('DB_USERNAME', 'xVMI2W19dq');
define('DB_PASSWORD', '');
define('DB_NAME', 'hackathonV2');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}else{

}
?>
