<?php

    $fname = $_POST['contact-form-fname'];
    $lname = $_POST['contact-form-lname'];
    $email_from = $_POST['contact-form-email'];
    $subject = $_POST['contact-form-subject'];
    $message = $_POST['contact-form-message'];
    $email_to = "jeffblackbusiness@gmail.com";

    $email_body = "From: $fname $lname ($email_from)\n\n"."Message:\n$message";

    mail($email_to, $subject, $email_body);
    
    Header("Location: http://www.jeffblack.info/#contact-info")
?>
