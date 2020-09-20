<?php 
include '../includes/config.php'; 
require "../includes/header.php"; 
?>


<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM users where id = $id";
    $result = $conn->query($sql);
        if (isset($_SESSION['id'])) { //General view
            if ($_SESSION['id'] == $id ) { 
                if ($result->num_rows > 0)  { //profile view
                    while($row = $result->fetch_assoc()) {
//PERSONAL PROFILE
echo '<div id="admin-wrapper">
<div>
        <h2>Welcome, '. $row["username"] .'</h2>
        <h3>UserId:'. $row["id"] .'</h3>
        <button type="button" class="admin-btn">Add Event</button>
        <button type="button" class="admin-btn" id="add_project">Add User</button>
        <button type="button" class="admin-btn">Delete User</button>
        </div>
        <div></div></div>';
            }
        }
    } 
}
    ?>
<?php
    require "../includes/footer.php";
    ?>