<?php

  $name     = htmlspecialchars($_POST['name']);
  $surname  = htmlspecialchars($_POST['surname']);
  $email    = htmlspecialchars($_POST['email']);
  $phone    = htmlspecialchars($_POST['phone']);

  $message = "New client info:\r\n" + "Name: " + $name + "\r\n" + "Surname: " + $surname + "\r\n" + "Email: " + $email + "\r\n" + "Phone: " + $phone + "\r\n";


  // Отправляем
  mail('spbabiak@gmail.com', 'New data from FXYTrade.com', $message);

  echo 'Thank you! Data have been successfully sent. Our manager will contact you as soon as possible';
?>