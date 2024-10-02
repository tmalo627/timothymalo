<?php

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    echo 'this is test';
    echo 'lorem ipsum';

    if($email == FILTER_VALIDATE_EMAIL) {
        echo '$email';
    }
    else {
        echo "invalid email";
    }
?>