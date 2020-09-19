<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
// Server DB info
// $db_serverName = 'localhost';
// $db_username = 'chrislc9_admin';
// $db_password = ',6Lc3.T)oD]*';
// $db_name = 'chrislc9_db1';

$db_serverName = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'demo';
$conn = mysqli_connect($db_serverName, $db_username, $db_password, $db_name);

if (!$conn) {
    die("Connection was unsuccessful: ".mysqli_connect_error());
    
}
?>