<?php require '../includes/header.php'; ?>

<body>
    <div id="form_wrapper">
        <h3>Register</h3>
        <?php 
        if (isset($_GET['error'])) {
            if ($_GET['error'] == "emptyFields") {
                echo '<p class="helper">Please fill in all fields</p>';
            }
            else if ($_GET['error'] == "invalidUsername&Email"){
                echo '<p class="helper">You have entered an invalid email or username</p>';
            }
            else if ($_GET['error'] == "invalidEmail"){
                echo '<p class="helper">You have entered an invalid email</p>';
            }
            else if ($_GET['error'] == "invalidUsername"){
                echo '<p class="helper">You have entered an invalid username</p>';
            }
            else if ($_GET['error'] == "passwordCheck"){
                echo '<p class="helper">Passwords do not match</p>';
            }
            else if ($_GET['error'] == "EmailTakenOrUsername"){
                echo '<p class="helper">An account is already registered 
                with that username or email</p>';
            }
        else if ($_GET['error'] == "RegistrationSuccess"){
            echo '<p class="helper_suc">You have successfully registered. You can now log in.</p>';
        }
    }
        ?>
        <form action="../includes/register_inc.php" method="post">
            <input type="text" name="username" placeholder="enter a username">
            <input type="email" name="email" placeholder="enter a valid email">
            <input type="password" name="password" placeholder="enter a password">
            <input type="password" name="password-verify" placeholder="re-enter your password">
            <button type="submit" name="Register" class="btn">Register </button>
            <p class="accounts_helper">Already a member? <a href="login.php">Login</a></p>
        </form>
    </div>
</body>

<?php require '../includes/footer.php'; ?>