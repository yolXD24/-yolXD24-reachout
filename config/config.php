<?php
ini_set('display_errors',1);
define('DB_SERVER', 'remotemysql.com');
define('DB_USERNAME', 'xVMI2W19dq');
define('DB_PASSWORD', 'gdxRplaVnU');
define('DB_NAME', 'xVMI2W19dq');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME,3306);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error().'Yol');
}else{

}
?>
