<?php
include '../includes/config.php'; 
include '../includes/header.php';

echo '<div class="event-wrapper"><h2 class="events-h2">Events</h2>';
if ($conn->connect_error) {
  die("Connection failed:" . $conn->connect_error);
}

$sql = "SELECT id, title, username, image, date, intro FROM events";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  
  while($row = $result->fetch_assoc()) {
    $image = $row["image"];
    echo 
    "<div class='event-card'>" . 
    "<div class='image'><img src='../uploads/$image' class='event-image' /></div>" .
    "<div class='content'><ul><li class='event-title'>" . $row["title"] . "</li>" .
    "<li class='event-user'>" . $row["username"] . "</li>" .
    "<li>" . $row["date"] . "</li>" .
    "<li>" . $row["intro"] . "</li>" .
    "<li>" . $row["intro"] . " <a href='eventview?id=".$row["id"]."'> " . "View More...</a></li></ul></div></div>";

  }
  echo '</div>';


} else {
  echo "<div class='event-wrapper'><h1>No Events Added</h1></div>";

}
$conn->close();
?>

<?php 
require "../includes/footer.php"; 
?>