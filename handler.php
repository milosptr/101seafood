<?php

 if(!filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)) return;

  $customer = $_GET['fullname'];
  $to = 'milosp@ultimatemovers.net';
  $from = $_GET['email'];
  $phone = $_GET['phone'];
  $subject = $customer . ' left a message on 101 seafood';
  $message = $_GET['message'] . "\r\n" . 'Customer phone: ' . (!empty($phone) ? $phone : '/');
  $headers = 'From: webmaster@101seafood.is'       . "\r\n" .
               'Reply-To:' . $from . "\r\n" .
               'X-Mailer: PHP/' . phpversion();
  try {
    mail($to, $subject, $message, $headers);
    session_start();
    $_SESSION['message'] = 'Email sent!';
    header('Location: /contact');
  } catch (Exception $e) {
    header('Location: /417');
  }
?>
