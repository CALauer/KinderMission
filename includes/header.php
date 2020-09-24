<?php 
session_start();
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/global.css" />
    <link rel="stylesheet" href="../css/navbar.css" />
    <link rel="stylesheet" href="../css/index/index.css" />
    <link rel="stylesheet" href="../css/enrollment/enrollment.css" />
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
            <div id="navbar">
                <div class="main-logo">
                </div>
                <div>
                </div>
            </div>';
            }
        }
    }

        else {
            echo '
            <div class="nav">
            <div>
                <ul>
                    <li><img src="../KinderMission-assets/KMA.png" alt="KMA" class="logo-menu" />
                    </li>
                    <li><a href="../view/index">Home</a></li>
                    <li><a href="../view/about">About</a></li>
                    <li><a href="../view/academics">Academics</a></li>
                    <li><a href="../view/enrollment">Enroll</a></li>
                    <li><a href="../view/scholarships">Scholarships</a></li>
                    <li><a href="../view/events">Events</a></li>
                    <li><a href="../view/contact">Contact</a></li>
                </ul>
                </div>
            <div>
                <ul>
                    <li>High Point, NC</li>
                    <li><img src="../KinderMission-assets/phone.png" class="phone" />(336)886-0121</li>
                </ul>
            </div>
            </div>
';
        }
    
    ?>



    </div>

    </div>