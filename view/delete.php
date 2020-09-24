<?php 
include '../includes/config.php'; 
require "../includes/header.php"; 
$id = $_GET['delete'];
$sql= ("DELETE FROM events WHERE id=$id") or die($mysqli->error());
$id = $_SESSION['id']; //Session ID



if (($_SESSION['id'] === $id) && ($_SESSION['title'] === "Admin")) {
if(isset($_GET['delete'])) {
mysqli_query($conn, $sql);

header("Location: ../view/profile.php?id=".$_SESSION['id']."&delete=success");

}
else {
    header("Location: ../view/profile.php?id=".$_SESSION['id']."&delete=failed");

}
}
require "../includes/footer.php"; 
?>