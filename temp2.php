<?php 

  $errors = [];
  $missing = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $to = 'summersbyink@gmail.com';
  $subject = 'Feedback from Ace of Base';

    $expected = ['name', 'email', 'terms'];
    $required = ['name', 'email', 'terms'];

    if (!isset($_POST['terms'])) {
        $_POST['terms'] = '';
        $errors['terms'] = true;
    }

  $header[] = 'From: Ace of Base<feedback@example.com>';
    $headers[] = 'Content-Type: text/plain; charset=utf-8';
    require './includes/form-to-email2.php';
    if ($mailSent) {
    header('Location: ./thank_you.php');

        exit;
    }
  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="songlist.css">
  <title>Ace of Base - Songlist</title>
</head>