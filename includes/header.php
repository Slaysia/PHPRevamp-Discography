<?php 

  $errors = [];
  $missing = [];

if ($_POST['submit']) {
  $to = 'summersbyink@gmail.com';
  $subject = 'Feedback from Ace of Base';
  $expected = ['name', 'email', 'subscribe'];
  $required = ['name', 'email', 'subscribe'];
  if (!isset($_POST['subscribe'])) {
      $_POST['subscribe'] = '';
      $errors['subscribe'] = true;
  }

  $header[] = 'From: Ace of Base<feedback@example.com>';
  $headers[] = 'Content-Type: text/plain; charset=utf-8';
  require './includes/form-to-email2.php';
  if ($mailSent) {
    header('Location: ./thank_you.php');
    exit;
  } else {
    print_r($_POST);
  }
}
?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
      <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.11/css/all.css" integrity="sha384-p2jx59pefphTFIpeqCcISO9MdVfIm4pNnsL08A6v5vaQc4owkQqxMV8kg4Yvhaw/" crossorigin="anonymous">-->
      <title>Ace of Base</title>
   </head>
