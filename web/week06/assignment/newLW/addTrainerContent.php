<?php 
    session_start();
    require "dbConnect.php";
    $db = get_db();
    $trainerData = NULL;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Live W.O.W.</title>
    <title>uiCookies:Trainer — Free Bootstrap Theme, Free Responsive Bootstrap Website Template</title>
    <meta name="description" content=""> 
    <link rel="stylesheet" type="text/css" href="cssFiles/editTrainerProfile.css">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata|Rubik:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="trainer/css/styles-merged.css">
    <link rel="stylesheet" href="trainer/css/style.min.css">
    <link rel="stylesheet" href="trainer/css/custom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Creates a drop down menu for cart -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- To add and clear items from booking/cart -->
  <script type="text/javascript" src=".../jquery.min.js"></script>
  </head>
<body>
<?php require 'navBarLW.php'?>
</body>
</html>