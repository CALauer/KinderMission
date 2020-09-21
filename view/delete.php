<?php 
include '../includes/config.php'; 
require "../includes/header.php"; 


if(isset($_GET['delete'])) {
$id = $_GET['delete'];
$sql= ("DELETE FROM events WHERE id=$id") or die($mysqli->error());
mysqli_query($conn, $sql);
echo '
<section>
    <div class="content-wrapper-sp">
        <div>
            <h1 class="content-sp-h1">'.$id.' Deleted</h1>
        </div>
</section>';
}
else {
    echo '<h1>Post unsuccessful</h1>';
}
require "../includes/footer.php"; 
?>