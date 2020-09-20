<?php require '../includes/header.php'; ?>

<body>
    <div id="form_wrapper">
        <h3>Admin Login</h3>
        <form action="../includes/login_inc.php" method="post">
            <div>
                <input type="text" name="emailUsername" class="input_field" placeholder="username">
                <span class="help-block">
            </div>
            <div>
                <input type="password" name="password" class="input_field" placeholder="password">
            </div>
            <div class="form-group">
                <input type="submit" class="submit-btn" value="Login" name="Login">
                <!-- <p class="accounts_helper">Dont have an account? <a href="register.php">Register</a></p> -->
            </div>
        </form>
    </div>
</body>

<?php require '../includes/footer.php'; ?>