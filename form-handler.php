<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'info@waterwisemarketing.com';
    $email_subject = 'New Form Submission';
    $email_body = "User name : $name.\n".
                    "User Email : $email.\n".
                    "Subject : $message.\n";

    $to = 'abhishekvarma123j@gmail.com';

    $headers = "FROM : $email_from \r\n";
    $headers .= "Reply-to : $email \r\n";

    mail($to , $email_subject , $email_body, $headers);

    header("Location : contact.html");
?>