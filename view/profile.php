<?php 
include '../includes/config.php'; 
require "../includes/header.php"; 
?>


<?php
    $id = $_GET['id'];
    $title = $_SESSION['title'];
    $sql = "SELECT * FROM users where id = $id";
    $sql2 = "SELECT * FROM events";
    $result2 = $conn->query($sql2);
    $result = $conn->query($sql);
    if ($result-> num_rows > 0)  { 
        while($row = $result->fetch_assoc()) {
            $username = $row["username"];
            if (($_SESSION['id'] === $id) && ($_SESSION['title'] === "Admin")) {
                if (($_SESSION['id'] === $id) && ($_SESSION['title'] === "Employee")) {
        // Employee View
        echo '<div id="admin-wrapper">
        <div>

        <button type="button" class="admin-btn">Add Event</button>
        <h3>UserId:'. $row["id"] .'</h3>
        </div>
        <div><h2> '. $title.' Panel</h2></div></div>';
            }
        }
        // Admin View
        echo '<div id="admin-wrapper">
        <div>
        <h2>Welcome, '. $username .'</h2>
        <h3>UserId:'. $row["id"] .'</h3>
        <button type="button" class="admin-btn">Overview</button>
        <button type="button" class="admin-btn">Employees</button>
        </div>
        <div>
        <div class="panel-title">
         <h3> '. $title.' Panel | Overview </h3></div>         <div>
 ';
         if ($result2-> num_rows <= 0)  { 
            if($row = $result2->fetch_assoc()) {
         echo '        <table>
         <caption class="table-name">Events</caption></tr>
         <th>Event Title</th>
         <th>Posted On</th>
         <th>Hire Date</th>
         <th>Delete</th>
         <th>Edit</th>
         </tr>
         <tr>
        <td>'.$row['title'].'</td>
        <td>'.$row['username'].'</td>
        <td>'.$row['date'].'</td>
        <td>
        <a href="../view/delete.php?delete='.$row['id'].'">Delete</a>
        </td>
        <td><button type="button">Edit</button></td>
        </tr>
        </table>
        </div>
        <div>
        <table>
        <caption class="table-name">Employees</caption></tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Hire Date</th>
        <th>Access</th>
                </tr>
        <tr>
        <td>Kyle</td>
        <td>KinderMission Academy</td>
        <td>Hired On</td>
        <td>Employee</td>
        <td><button type="button">Delete</button></button></td>
        <td><button type="button">Edit</button></button></td>
</tr>
</table>
</div>
</div>
</div>';
}
else {
    echo '<h1>Add an Event</h1>
    <form>
    <label>Event Title</label>
    <input type = "text" name="title" />
    <label>Event Intro</label>
    <input type = "text" name="intro" />
    <label for="file" class="inputFile"></label>
    <input type = "file" name="image"/> <br />
    <label>Event Content</label>
    <textarea name="content"></textarea>
    <button type="button" class="admin-btn">Add Event</button>

    </form></div></div></div>';
}
}
}
}
//EMPLOYEE PROFILE

?>
<?php
require "../includes/footer.php";
?>