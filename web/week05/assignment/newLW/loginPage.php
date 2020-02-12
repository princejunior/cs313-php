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
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">
    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <script src="jsFiles/loginPage.js"></script>
    <link rel="stylesheet" type="text/css" href="cssFiles/loginPage.css">
</head>
<body>
<nav class="navbar navbar-inverse" style="margin-bottom: 0px" >
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
<body class="text-center">
    <?php 
        $email = "";
        $password = "";
    ?>
    <img class="mb-4" src="https://polar-waters-71288.herokuapp.com/week05/assignment/photos_LW/lwLogo.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <div>
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-secondary active">
                <input type="radio" name="options" id="option1" autocomplete="off" onfocus="login(1)" checked> Log In
            </label>
            <label class="btn btn-secondary">
                <input type="radio" name="options" id="option2" autocomplete="off" onfocus="login(2)"> Sign Up
            </label>
            <label class="btn btn-secondary">
                <input type="radio" name="options" id="option3" autocomplete="off" onfocus="login(3)"> Trainer Sign Up
            </label>
        </div>
        <form id="login" class="form-signin" action="" method="POST">
            <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" id="inputEmail" class="form-control"  name="email" placeholder="Email address" required="" autofocus="">
            <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required="">
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me">Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
            <p class="mt-5 mb-3 text-muted">© 2019-2020</p>
        </form>

        <form id="signUp" class="form-signin" action="insertNewUsers.php" method="POST">
            <label for="inputEmail" class="sr-only">First Name</label>
                <input type="firstName" id="inputFirstName" class="form-control"  name="first_name" placeholder="First Name" required="" autofocus="">
            <label for="inputEmail" class="sr-only">Last Name</label>
                <input type="lastName" id="inputLastName" class="form-control"  name="last_name" placeholder="Last Name" required="" autofocus="">
            <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" id="inputEmail" class="form-control"  name="email" placeholder="Email address" required="" autofocus="">
            <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required="">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
            <p class="mt-5 mb-3 text-muted">© 2019-2020</p>
        </form>

        <form id="trainerSignUp" class="form-signin" action="insertNewTrainers.php" method="POST">
            <label for="inputEmail" class="sr-only">First Name</label>
                <input type="firstName" id="inputFirstName" class="form-control"  name="first_name" placeholder="First Name" required="" autofocus="">
            <label for="inputEmail" class="sr-only">Last Name</label>
                <input type="lastName" id="inputLastName" class="form-control"  name="last_name" placeholder="Last Name" required="" autofocus="">
            <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" id="inputEmail" class="form-control"  name="email" placeholder="Email address" required="" autofocus="">
            <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required="">
            <div class="checkbox mb-3">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td><input type="checkbox" name="speciality" value="Power Lifting">Power Lifting</td>
                        <td><input type="checkbox" name="speciality" value="Yoga">Yoga</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="speciality" value="Crossfit">Crossfit</td>
                        <td><input type="checkbox" name="speciality" value="Pilates">Pilates</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="speciality" value="Cardio">Cardio</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
                <!-- <label>
                    <input type="checkbox" name="speciality" value="Yoga">Yoga
                    <input type="checkbox" name="speciality" value="Power Lifting">Power Lifting
                    <br>
                    <input type="checkbox" name="speciality" value="Crossfit">Crossfit
                    <input type="checkbox" name="speciality" value="Pilates">Pilates
                    <br>
                    <input type="checkbox" name="speciality" value="Cardio">Cardio
                </label> -->
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
            <p class="mt-5 mb-3 text-muted">© 2019-2020</p>
        </form>
    </div>
</body>
</html>