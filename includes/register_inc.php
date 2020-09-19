<?php 
if(isset($_POST['Register'])) {
    
    require 'config.php';

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordVerify = $_POST['password-verify'];

    if (empty($username) || empty($email) || empty($password) || empty($passwordVerify)) {
        
        header("Location: ../view/register.php?error=emptyFields&username=".$username."&email=".$email);
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match("/^[a-zA-z0-9]*$/", $username)) {
        header("Location: ../view/register.php?error=invalidUsername&Email");
        exit();

    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../view/register.php?error=invalidEmail=".$username);
        exit();
    }
    else if (!preg_match("/^[a-zA-z0-9]*$/", $username)) {
        header("Location: ../view/register.php?error=invalidUsername=".$email);
        exit();
    }
    else if ($password !== $passwordVerify) {
        header("Location: ../view/register.php?error=passwordCheck&username=".$username."&email=".$email);
        exit();
    }
    else {
        $sql = "SELECT email, username FROM users WHERE email=? OR username=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../view/register.php?error=sqlError");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "ss", $email, $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("Location: ../view/register.php?error=EmailTakenOrUsername");
                exit();
            }
            
            else {
                $sql = "INSERT INTO users (username, email, password) VALUES (?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: ../view/register.php?error=sqlError");
                    exit(); 
        }
        else {
            $hashedPass = password_hash($password, PASSWORD_DEFAULT);
            
            mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPass);
            mysqli_stmt_execute($stmt);
            header("Location: ../view/register.php?error=RegistrationSuccess");
            exit();
                }       
            }   
        }
    }
 mysqli_stmt_close($stmt);
 mysqli_close($conn);
}
else {
    header("Location: ../view/register.php");
                    exit(); 
}