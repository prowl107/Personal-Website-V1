<?php

function validateFields()
{
    $items = ['name', 'email', 'message', 'subject'];
    $fieldCheck = $filterCheck = true;

    //Check if each field is empty
    foreach ($items as $fields) {
        if (empty($_POST[$fields])) {
            $fieldCheck = false;
            return false;
            // echo $fieldCheck;
            // echo "Failed Validation - Field Empty \r";
        } else {
            //Field is not empty
            // echo $fieldCheck;
            // echo "Passed Validation - Value Present \r";
        }
    }

    if ($fieldCheck == true) {
        //Check if each field has allowed values
        foreach ($items as $fields) {
            //Start filtering inputs based on field
            if ($fields == 'name') {
                //Only letters and spaces should pass
                if (!preg_match(' /^[a-zA-Z\s]+$/', $_POST[$fields])) {
                    // echo "Invalid name entered \r";
                    $filterCheck = false;
                }
                //check for valid emails
            } elseif ($fields == 'email') {
                if (!filter_var($_POST[$fields], FILTER_VALIDATE_EMAIL)) {
                    // echo "Invalid email address entered \r";
                    $filterCheck = false;
                }
                //allow alphanumeric characters and special symbols
            } elseif ($fields == 'subject' or $fields == 'message') {
                if (!preg_match(' /[A-Za-z0-9\s] +$/', $_POST[$fields])) {
                    if ($fields == 'subject') {
                        // echo "Invalid subject entered \r";
                    } elseif ($fields == 'message') {
                        // echo "Invalid message entered \r";
                    }
                    $filterCheck = false;
                }
            }
        }
        if ($fieldCheck == false) {
            return false;
        }
    } else {
        return false;
    }
    return true;
}


//Send email if both checks pass 
if (validateFields()) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $header = $_POST['subject'];
    $subject = 'Contact Form Submission:' . $name . ", " . $email;
    $recipient = 'pxqsaklo@prowl107.com';
    mail($recipient, $subject, $message, $header);

    flush();
    // 301 Moved Permanently
    header("Location: http://www.prowl107.com", true, 301);
    exit();
}
