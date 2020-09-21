<?php




$sql2 = "SELECT id, title, username, date FROM events";
$resultTwo = $conn->query($sql2);

if ($resultTwo->num_rows > 0) {
    echo '
    <td>'.$row['title'].'</td>
    <td>KinderMission Academy</td>
    <td>Hired On</td>
    <td><button type="button">Delete</button></td>
    <td><button type="button">Edit</button></td>
';
} else {
  echo "0 results";
}
?>