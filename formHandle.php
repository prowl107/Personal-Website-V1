<?php
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];  
$subject = $_POST["subject"];
$header = "Contact Form Submission: ${name} , ${email}";
$recipient = "pxqsaklo@prowl107.com";

mail($recipient,$subject,$message,$header);
?>

