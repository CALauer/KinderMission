<?php
require_once 'config.php'; 
 function getUsername($id)  {
    $sql = "SELECT username FROM users WHERE id ='$id'";
    $result = $link->query($sql);
                if($row = $result->fetch_assoc()) {
                echo " ". $row["username"] ." ";
                
                }  
 }

            ?>