<?php
include '../includes/config.php'; 
include '../includes/header.php';
echo '<div class="content-wrapper-sp"><h2 class="content-h2">Events</h2></div>';
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, title, username, image, date, intro FROM events";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  
  while($row = $result->fetch_assoc()) {
    $image = $row["image"];
    echo "<div class='event-wrapper-sp'>" .
    "<div class='event-image '><img src='../uploads/$image' class='event-image'/></div>" .
    "<div class='title'>" . $row["title"] . "</div>" .
    "<div class='username'>" . $row["username"] . "</div>" .
    "<div class='date'>" . $row["date"] . "</div>" .
    "<div class='event-content'>" . $row["intro"] . " <a href='eventview?id=".$row["id"]."'> " . "View More...</a>" .
    "</div></div>";
  }
} else {
  echo "<div class='event-wrapper-sp'><h1>No Events Added</h1></div>";

}
$conn->close();
?>

<?php 
require "../includes/footer.php"; 
?>