<?php 
include '../includes/config.php'; 

session_start();
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/global.css" />
    <link rel="stylesheet" href="../css/navbar.css" />
    <link rel="stylesheet" href="../css/svg-animations.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../KinderMission-assets/KMA_Logo_0.png" type="image/x-icon" />
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

            echo '            <div id="nav">
            <div>
            <ul class="mobile-logo">
            </ul>
              <ul class="nav-ul">
              <li><a href="../view/index" class="nav-links"nav-links">Home</a></li>
              <li><a href="../view/about"  class="show-menu nav-links">About Us</a>
                          <ul class="menu-hidden">
                          <li><a href="../view/about" class="nav-links">Our History</a></li>
                          <li><a href="../view/staff" class="nav-links">Our Staff</a></li>
                          <li><a href="../view/scholarships" class="nav-links">Scholarships</a></li>
                              <li><a href="../view/careers" class="nav-links">Careers</a></li>
                          </ul></li>
                <li><a href="../view/academics" class="nav-links">Academics</a></li>
                <li><a href="../view/events"  class="nav-links">Events</a></li>
                <li><a href="../view/contact"  class="nav-links">Contact</a></li>
                <li><a href="../view/enrollment"  class="enroll-btn-nav">Enroll Now</a></li>
                </ul>
                </div>
                <div>
                <ul class="mobile-menu-icon">
                <li>
                <img src="../KinderMission-assets/hamburger-menu.svg" id="hamburger-menu" alt="hamburger-menu-icon" class="menu-icon" />
                </li>
                </ul>

              </div>
            </div>
            <div class="mobile-drop">
            <ul>
            <li><a href="../view/index">Home</a></li>
            <li><a href="../view/enrollment">Enroll Now</a></li>
            <li><a href="../view/about">About Us</a></li>
            <li><a href="../view/academics">Academics</a></li>
            <li><a href="../view/scholarships">Scholarships</a></li>
            <li><a href="../view/careers">Careers</a></li>
            <li><a href="../view/events">Events</a></li>
            <li><a href="../view/contact">Contact Us</a></li>
            </ul>
            </div>
';
            }
        }
    }

        else {
            echo '
            <div id="nav">
              <div>
              <ul class="mobile-logo">
              </ul>
                <ul class="nav-ul">
                <li><a href="../view/index" class="nav-links"nav-links">Home</a></li>
                <li><a href="../view/about"  class="show-menu nav-links">About Us</a>
                            <ul class="menu-hidden">
                            <li><a href="../view/about" class="nav-links">Our History</a></li>
                            <li><a href="../view/staff" class="nav-links">Our Staff</a></li>
                            <li><a href="../view/scholarships" class="nav-links">Scholarships</a></li>
                                <li><a href="../view/careers" class="nav-links">Careers</a></li>
                            </ul></li>
                  <li><a href="../view/academics" class="nav-links">Academics</a></li>
                  <li><a href="../view/events"  class="nav-links">Events</a></li>
                  <li><a href="../view/contact"  class="nav-links">Contact</a></li>
                  <li><a href="../view/enrollment"  class="enroll-btn-nav">Enroll Now</a></li>
                  </ul>
                  </div>
                  <div>
                  <ul class="mobile-menu-icon">
                  <li>
                  <img src="../KinderMission-assets/hamburger-menu.svg" id="hamburger-menu" alt="hamburger-menu-icon" class="menu-icon" />
                  </li>
                  </ul>

                </div>
              </div>
              <div class="mobile-drop">
              <ul>
              <li><a href="../view/index">Home</a></li>
              <li><a href="../view/enrollment">Enroll Now</a></li>
              <li><a href="../view/about">About Us</a></li>
              <li><a href="../view/academics">Academics</a></li>
              <li><a href="../view/scholarships">Scholarships</a></li>
              <li><a href="../view/careers">Careers</a></li>
              <li><a href="../view/events">Events</a></li>
              <li><a href="../view/contact">Contact Us</a></li>
              </ul>
              </div>
';
        }
    
    ?>