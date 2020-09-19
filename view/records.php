<?php
include '../includes/config.php'; 
include '../includes/header.php';
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, username, password, firstname, lastname, created_at FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<div id='index_wrapper'><table class='members'>              <th>Id</th>
  <th>Username</th>
  <th>Registration Date</th>
  <th>First Name</th>
  <th>Last Name</th>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"] . 
    "</td><td><a href='profile.php?id=".$row["id"]."'>" . $row["username"] .
    "</a></td><td>" . $row["created_at"] .
    "</td><td>" . $row["firstname"] .
    "</td><td>" . $row["lastname"] . "</td></tr></div>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>