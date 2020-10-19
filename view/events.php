<?php
include '../includes/config.php'; 
include '../includes/header.php';

echo '<div class="event-wrapper"><h2 class="events-h2">Events</h2></div>';
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
    "<div class='content'>
    <div class='event-header'><ul><li class='event-title'>" . $row["title"] . "</li>" .
    "<li class='event-user'>" . $row["username"] . "</li>" .
    "<li>" . $row["date"] . "</li>" .
    "<li>" . $row["intro"] . "</li></ul></div>" .
    "<div class='event-view-more'><a href='eventview?id=".$row["id"]."' class='event-button-view'>View More</a></div></div></div> ";

  }
  echo '</div>';


} else {
  echo "<div class='event-view-wrapper'><h1>There are currently no events listed</h1></div>";

}
$conn->close();
?>

<?php 
require "../includes/footer.php"; 
?>