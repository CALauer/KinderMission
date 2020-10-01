<?php 
include '../includes/config.php'; 
require "../includes/header.php"; 

    $id = $_GET['id'];
    $sql = "SELECT * FROM events where id = $id";
    $result = $conn->query($sql);
                if ($result->num_rows > 0)  { 
                    while($row = $result->fetch_assoc()) {
                    $image = $row['image'];

echo '<div class="event-view-wrapper">
<div>
<img src="../uploads/'.$row['image'].'" class="view-event-image" />
</div>
<div>
<h1 class="content-h2">Fell Festival</h1>
<p>' . $row['content'] . '</p>
</div>
</div>';

    }
                    }

    require "../includes/footer.php";
    ?>