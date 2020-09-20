<?php 
include '../includes/config.php'; 
require "../includes/header.php"; 
?>


<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM events where id = $id";
    $result = $conn->query($sql);
        if (isset($_SESSION['id'])) { //General view
            if ($_SESSION['id'] == $id ) { 
                if ($result->num_rows > 0)  { //profile view
                    while($row = $result->fetch_assoc()) {
//PERSONAL PROFILE



}
}
}
else
{
if ($result->num_rows > 0) { //profile view
//MEMBER VIEW OTHER PROFILE
    while($row = $result->fetch_assoc()) {
        
    }
    }
    }
    }
    else {
        //NON MEMBER VIEW
        if ($result->num_rows > 0) { //profile view
            while($row = $result->fetch_assoc()) {
            $image = $row["image"];       
                echo "<div class='event-view-wrapper'>" .
                "<div><h2 class='content-h2'>" . $row["title"] . "</h1></div>" .
                "<div>Posted By: " . $row["username"] . "</div>" .
                "<div>Posted On: " . $row["date"] . "</div>" .
                "<div class=''><img src='$image' class='event-image'/></div>" .
                "<div class=''><p>" . $row["content"] . 
                "</p></div></div>";
            }
        }

    }
    ?>
<?php
    require "../includes/footer.php";
    ?>