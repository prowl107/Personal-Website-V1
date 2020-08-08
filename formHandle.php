<?php
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];  
$subject = "New form submission from: ${name}, ${email}";
$email_reciever = "osborm10@my.erau.edu";

mail($email_reciever,$subject,$message);
?>

