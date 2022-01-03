<?php

$name = $surname = $email = $phone = '';
$nameErr = $surnameErr = $emailErr = $phoneErr = '';
$message = '';

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function isDigits(string $s, int $minDigits = 9, int $maxDigits = 14): bool {
    return preg_match('/^[0-9]{'.$minDigits.','.$maxDigits.'}\z/', $s);
}

function isValidTelephoneNumber(string $telephone, int $minDigits = 9, int $maxDigits = 14): bool {
    if (preg_match('/^[+][0-9]/', $telephone)) { //is the first character + followed by a digit
        $count = 1;
        $telephone = str_replace(['+'], '', $telephone, $count); //remove +
    }
    
    //remove white space, dots, hyphens and brackets
    $telephone = str_replace([' ', '.', '-', '(', ')'], '', $telephone); 

    //are we left with digits only?
    return isDigits($telephone, $minDigits, $maxDigits); 
}

function normalizeTelephoneNumber(string $telephone): string {
    //remove white space, dots, hyphens and brackets
    $telephone = str_replace([' ', '.', '-', '(', ')'], '', $telephone);
    return $telephone;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    echo $nameErr . "\r\n";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed for name";
      echo $nameErr . "\r\n";
    }
  }

  if (empty($_POST["surname"])) {
    $surnameErr = "Surname is required";
    echo $surnameErr . "\r\n";
  } else {
    $surname = test_input($_POST["surname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$surname)) {
      $surnameErr = "Only letters and white space allowed for surname";
      echo $surnameErr . "\r\n";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    echo $emailErr . "\r\n";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      echo $emailErr . "\r\n";
    }
  }

  if(empty($_POST["phone"])) {
    $phoneErr = "Phone is required";
    echo $phoneErr . "\r\n";
    echo $phoneErr;
  } else {
    $phone = test_input($_POST["phone"]);
    if (!isValidTelephoneNumber($phone)) {
      $phoneErr = "Invalid phone format";
      echo $phoneErr . "\r\n";
    } else {        
        //normalize telephone number if needed
        normalizeTelephoneNumber($phone); 
    }
  }
}

  $message = "New client contacts:\r\nName: " . $name . "\r\nSurname: " . $surname . "\r\nEmail: " . $email . "\r\nPhone: " . $phone . "\r\n";

  echo $message;
  // Отправляем
  // mail('spbabiak@gmail.com', 'New data from FXYTrade.com', $message);

  // echo 'Thank you! Data have been successfully sent. Our manager will contact you as soon as possible';
?>