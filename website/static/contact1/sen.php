<?php

if (isset($_POST["submit"])) {
  $firstname = $_POST['first_name'];
  $lastname = $_POST['last_name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['info_message'];
  $from = $email;
  $to = 'shishe1001@gmail.com';
  $subject = $subject . ': Message from Code 3 Solutions Contact Form ';

  $body = "From: $firstname\n";
  $body .="E-Mail: $email\n";
  $body .="Subject: $subject\n";
  $body .="Message: $message\n";
  header("/mailsent");

  // Check if name has been entered
        if (!$_POST['first_name']) {
            $errName = 'Please enter your name';
        }

        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }

        //Check if message has been entered
        if (!$_POST['info_message']) {
            $errMessage = 'Please enter your message';
        }

        // If there are no errors, send the email
      if (!isset($errName) && !isset($errEmail) && !isset($errMessage)) {
          if (mail ($to, $subject, $body, $from)) {
              $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
              echo ($result);
          } else {
              $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
              echo($result);
          }
      } else {
        echo ("Sorry, check your fields");
      }

}

?>