<?php
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];  
$subject = "New form submission from: ${name} , ${email}";
$email_reciever = "pxqsaklo@prowl107.com";

mail($email_reciever,$subject,$message);
?>

