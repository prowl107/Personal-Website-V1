<?php
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];  
$subject = "Contact Form Submission: ${name} , ${email}";
$email_reciever = "pxqsaklo@prowl107.com";

mail($email_reciever,$subject,$message);
?>

