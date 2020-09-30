<?php 

$errors = '';
$myEmail = 'admin@chrislauer.net';//<-----Put Your email address here.
$guardian = $_POST['guardian']; 
$email_address = $_POST['email']; 
$phone = $_POST['phone']; 
$child = $_POST['child']; 
$allergies = $_POST['allergies']; 
$startDate = $_POST['startDate']; 
$financial = $_POST['financial']; 


if (empty($guardian) || empty($email_address) || empty($child) || empty($financial) || empty($allergies) || empty($startDate))  {
        
    header("Location: ../view/enrollment.php?error=emptyFields");
    exit();
}
else if (!filter_var($email_address, FILTER_VALIDATE_EMAIL) && preg_match("/^[a-zA-z0-9]*$/", $username)) {
    header("Location: ../view/enrollment.php?error=invalidEmail");
    exit();

}
else if (!filter_var($phone, FILTER_VALIDATE_INT)) {
    header("Location: ../view/enrollment.php?error=invalidPhone");
    exit();
}
else if (!preg_match("/^[a-zA-Z\s]*$/", $father)) {
    header("Location: ../view/enrollment.php?error=invalidFather");
    exit();
}
else if (!preg_match("/^[a-zA-Z\s]*$/", $mother)) {
    header("Location: ../view/enrollment.php?error=invalidMother");
    exit();
}
else if (!preg_match("/^[a-zA-Z\s]*$/", $child)) {
    header("Location: ../view/enrollment.php?error=invalidChild");
    exit();
}
else {
    $father = $_POST['father']; 
    $mother = $_POST['mother']; 
    $email_address = $_POST['email']; 
    $phone = $_POST['phone']; 
    $child = $_POST['child']; 
    $allergies = $_POST['allergies']; 
    $startDate = $_POST['startDate']; 
    $financial = $_POST['financial']; 
    if (!preg_match(
    "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
    $email_address))
    {
        $errors .= "\n Error: Invalid email address";
    }
    if(empty($errors))
    
    {
    
    $email_subject = "Enrollment Request: $child";
    $email_body = "You have received a new enrollment request. \n ".
    "Parent/Guardians Name:$guardian \n ".
    "Child's Name: $child \n ".
    "Allergies Name: $allergies \n ".
    "Financial assistance needed: $financial \n ".
    "Email: $email_address \n ".
    "Phone: $phone \n ";
    $headers = "From: $myEmail\r\n";
    $headers .= "Reply-To: $email_address\r\n";
    $headers .= "Return-Path: $myEmail\r\n";
    $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "lauer.chris1@gmail.com\r\n";
    $msg = "Thank you for your submission, you will receive an email shortly.";
    // $headers .= "Organization: KinderMission Academy\r\n"; 
    
    mail($myEmail,$email_subject,$email_body,$headers);
    mail($email_address, "Thanks!!", "Thank for your inquiry, someone will be in touch shortly.");
    //redirect to the 'thank you' page
    header("Location: ../view/enrollment.php?error=Success");
    
    }
}



?>