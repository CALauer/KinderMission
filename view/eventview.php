<?php 
include '../includes/config.php'; 
require "../includes/header.php"; 

    $id = $_GET['id'];
    $sql = "SELECT * FROM events where id = $id";
    $result = $conn->query($sql);
                if ($result->num_rows > 0)  { 
                    while($row = $result->fetch_assoc()) {
                    $image = $row['image'];

                        echo "<div class='event-view-wrapper'>" .
"<div><h2 class='content-h2'>" . $row["title"] . "</h1></div>" .
"<div>Posted By: " . $row["username"] . "</div>" .
"<div>Posted On: " . $row["date"] . "</div>" .
"<div class=''><img src='../uploads/$image' class='event-image'/></div>" .
"<div class=''><p>" . $row["content"] . 
"</p></div></div>";
}
                }

    require "../includes/footer.php";
    ?>