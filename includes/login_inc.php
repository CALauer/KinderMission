<?php 

if(isset($_POST['Login'])) {

    require 'config.php'; 

    $emailUsername = $_POST['emailUsername'];
    $password = $_POST['password'];

    if (empty($emailUsername) ||  empty(password)) {
        header ('Location: ../view/index.php?error=EmptyFields');
        exit();   
    } 
    else {
        $sql = "SELECT * FROM users WHERE username=? OR email=? ";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header ('Location: ../view/index.php?error=sqlError');
            exit();
        } 
        else {

        mysqli_stmt_bind_param($stmt, "ss", $emailUsername, $emailUsername);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($result)) {
            $passwordCheck = password_verify($password, $row['password']);
            if ($passwordCheck == false) {
                    header ('Location: ../view/index.php?error=wrongPassword');
                    exit();
                }
                else if ($passwordCheck == true) {

                    session_start();
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['title'] = $row['title'];
                    header ('Location: ../view/index.php?login=success');
                    exit();
                } 
            }
                else {
                    header ('Location: ../view/index.php?error=noRegisteredUsers');
                    exit();
                }
        }
    }
}