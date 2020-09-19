<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

$db_serverName = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'demo';

$conn = mysqli_connect($db_serverName, $db_username, $db_password, $db_name);

if (!$conn) {
    die("Connection was unsuccessful: ".mysqli_connect_error());
    
}
?>