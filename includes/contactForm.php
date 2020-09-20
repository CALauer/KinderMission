<?php 

$errors = '';
$myEmail = 'admin@chrislauer.net';//<-----Put Your email address here.
if(empty($_POST['name'])  || 
   empty($_POST['email']) || 
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name']; 
$email_address = $_POST['email']; 
$message = $_POST['message']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}
if(empty($errors))

{

$to = $myEmail;
$email_subject = "Contact form submission: $name";
$email_body = "You have received a new message. ".
" Here are the details:\n Name: $name \n ".
"Email: $email_address\n Message \n $message";
$headers = "From: $myEmail\r\n";
$headers .= "Reply-To: $email_address\r\n";
$headers .= "Return-Path: $myEmail\r\n";
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "lauer.chris1@gmail.com\r\n";
$msg = "Thank you for your submission, you will receive an email shortly.";
// $headers .= "Organization: KinderMission Academy\r\n"; 

mail($to,$email_subject,$email_body,$headers);
mail($email_address, "Thanks!!", "Thank for your inquiry, someone will be in touch shortly.");
//redirect to the 'thank you' page
header('Location: ../view/contactFormSuccess.php');

}
?>