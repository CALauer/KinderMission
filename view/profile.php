<?php 
include '../includes/config.php'; 
require "../includes/header.php"; 

$id = $_SESSION['id']; //Session ID
$userTitle = $_SESSION['title']; //Users Title
$userId = $_GET['id']; //User's Dyanmic ID
$sql = "SELECT * FROM users where id = $id";
$sql2 = "SELECT * FROM events";
$result2 = $conn->query($sql2);
$result = $conn->query($sql);


if ($result-> num_rows > 0)  { 
    while($row = $result->fetch_assoc()) {
    $user = $row['username'];
    if (($_SESSION['id'] === $userId) && ($_SESSION['title'] === "Admin")) {
    }
    // ADMIN VIEW 
    echo '<div id="admin-wrapper">
            <div class="col1">
                <h2>Welcome, '.$user.'</h2>
                <h3>UserId:'. $row["id"] .'</h3>
                <button type="button" class="admin-btn">Overview</button>
                <button type="button" class="admin-btn">Employees / Users</button>
            </div>
            <div class="col2">
                <div class="panel-title">
                    <h3> '. $userTitle.' Panel | Overview </h3>
                </div><div class="inner-col1">';
                if (isset($_GET['delete'])) {
                    if ($_GET['delete'] == "failed") {
                        echo '<p>Delete Failed</p>';
                    }
                else if ($_GET['delete'] == "success"){
                    echo '<p>You have successfully deleted the event. You can now log in.<br /><br /></p>';
                }
            }
            echo '
<table>
    <caption class="table-name">Events</caption>
    </tr>
    <th>Event Title</th>
    <th>Posted On</th>
    <th>Posted By</th>
    <th>Delete</th>
    <th>Edit</th>
    </tr>
    <tr>';
        while($row = $result2->fetch_assoc()) {
        echo '
        <td><a href="eventview?id='.$row['id'].'">'.$row['title'].'</a></td>
        <td>'.$row['date'].'</td>
        <td>'.$row['username'].'</td>
        <td>
            <a href="../view/delete.php?delete='.$row['id'].'">Delete</a>
        </td>
        <td><button type="button">Edit</button></td>
    </tr>';
    } ?>
</table>
</div>
<div class="inner-col2">
    <form action="../includes/addEvent.php" method="post" enctype="multipart/form-data">
        <label>Event Title</label>
        <input type="text" name="title" />
        <label>Intro</label>
        <input type="text" name="intro" />
        <label>Content</label>
        <input type="hidden" name="username" value=<?php echo ''.$user.''; ?> />
        <textarea name="content"></textarea>
        <label>Upload Image</label>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Add Event" name="submit" class="admin-btn">
    </form>
    </form>
</div>


</div>
</div>';
<?php
// Employee View
if (($_SESSION['id'] === $userId) && ($_SESSION['title'] === "Employee")) {
echo '<h1>'.$row['title'].' View</h1>';
}
}
}

//EMPLOYEE PROFILE

?>
<?php
require "../includes/footer.php";
?>