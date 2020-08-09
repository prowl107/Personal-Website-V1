<?php
if(isset($_POST['send'])){
    foreach( $_POST as $fields ) {
        if( !empty($_POST[$fields])){
         $postCheck = true;
        } else {
            $postCheck = false;
            echo "Failed Validation - Field Empty";
        }
    }
}

$postCheck = false;
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];  
$header = $_POST['subject'];
$subject = 'Contact Form Submission: ${name} , ${email}';
$recipient = 'pxqsaklo@prowl107.com';

mail($recipient,$subject,$message,$header);
?>

