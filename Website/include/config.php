<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'u128397p123998_roywillems');
define('DB_PASSWORD', '13Juli2005!');
define('DB_NAME', 'u128397p123998_Login');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect('localhost', 'u128397p123998_roywillems', '13Juli2005!', 'u128397p123998_Login');
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>