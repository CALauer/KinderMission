<?php 
include '../includes/config.php'; 

session_start();
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/global.css" />
    <link rel="stylesheet" href="../css/navbar.css" />
    <link rel="stylesheet" href="../css/index/index.css" />
    <link rel="stylesheet" href="../css/enrollment/enrollment.css" />
    <link rel="stylesheet" href="../css/about/about.css" />
    <link rel="stylesheet" href="../css/contact/contact.css" />
    <link rel="stylesheet" href="../css/events/events.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- <link rel="shortcut icon" href="../../portfolio_images-assets/cl_logo_big.png" type="image/x-icon" /> -->
    <title>KinderMission Academy</title>
</head>

<body>
    <?php 

    if (isset($_SESSION['id']) && isset($_SESSION['title'])) {
        $sql = "SELECT * FROM users where id = '".$_SESSION['id']."'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
        $id = $row["id"];

            echo '
            <div id="nav">
            <div>
              <ul>
                <li><a href="#" class="show-menu">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Admin</a>
            </ul>
            </div>
            <div class="menu-hidden">
            <ul><li>Shown</li><ul>
            </div>
          </div>';
            }
        }
    }

        else {
            echo '
            <div id="nav">
            <div>
              <ul>
                <li><a href="#" class="show-menu">Home</a></li>
                <li><a href="#" class="menu-hidden">About</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Admin</a>
            </ul>

          </div>
          </div>
';
        }
    
    ?>