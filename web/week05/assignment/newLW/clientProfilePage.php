<?php 
    session_start();
    require "dbConnect.php";
    $db = get_db();
    $trainerData = NULL;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Live W.O.W.</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Inside folder -->
  <link rel="stylesheet" type="text/css" href="homePageStlye.css">
  <!-- Linking BootStrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Creates a drop down menu for cart -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- To add and clear items from booking/cart -->
  <!-- <script type="text/javascript" src=".../jquery.min.js"></script> -->
</head>
<body>
<nav class="navbar navbar-inverse" >
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="homePageLW.php">Live W.O.W.</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="homePageLW.php">Home</a></li>
                <li><a href="#">Trainers</a></li>
                <li><a href="#">Nutrionist</a></li>
                <li><a href="#">Physical Therapist</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!-- <li><a href="viewCartLW.php"><span class="glyphicon glyphicon-shopping-cart"></span>Booking</a></li> -->
                <li class="dropdown">
            <a href="viewCartLW.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="fa fa-gift bigicon"></span> Booking<span class="caret"></span></a>
                <ul id="dropBox" class="dropdown-menu dropdown-cart" role="menu">

                    
                        <!-- <span class="item">
                            <span class="item-left">
                                <img src="http://www.prepbootstrap.com/Content/images/template/menucartdropdown/item_3.jpeg" alt="" />
                                <span class="item-info">
                                    <span>Item name</span>
                                    <span>price: 12$</span>
                                </span>
                            </span>
                            <span class="item-right">
                                <button class="btn btn-danger  fa fa-close"></button>
                            </span>
                        </span>
                    </li> -->
                    <li class="divider"></li>
                    <li><a class="text-center" href="#">View Cart</a></li>
                </ul>
        </li>
                <li><a href="clientProfilePage.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                <li><a href="clientSignInPage.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>
</body>
</html>