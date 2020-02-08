<!-- Starts session -->
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
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>
<main role="main">
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Live W.O.W.</h1>
            <p class="lead text-muted">Looking for a personal trainer or classes near you. 
                    Live WOW is a plateform to help connect you to a 
                    tailored trainer that is best for you! Trainers found here are certified 
                    to come to your house, work, and even to a park to help you stay healthy. 
                    No need to worry, you can pair up with a trainer to fit your busy schedule.</p>
            <p>
                <a href="#" class="btn btn-primary my-2">Find the Right Trainer for You</a>
            </p>
        </div>
    </section>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
            <?php
                $statement = $db->prepare("SELECT * FROM trainer");
                $statement->execute();
                // Go through each result
                while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
                    // The variable "row" now holds the complete record for that
                    // row, and we can access the different values based on their
                    // name
                    $name = $row['name'];
                    $profile_img_url = $row['profile_img_url'];
                    $speciality = $row['speciality'];
                    $id = $row['id'];?>
                    <div class="col-md-4" style="margin-bottom: 25px;" id=<?php echo "trainers[".$i."]"?>>
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" 
                                src=" <?php echo $profile_img_url;?> " data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                            <div class="card-body">
                                <h3 class="card-title"><?php echo $name;?></h3>
                                <h5 class="card-title"><?php echo $speciality;?></h5>
                                <p class="card-text">
                                    Description</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href='profilePageLW.php?id=<?php echo $id?>'><button class="btn btn-primary" value="<?php echo $id?>">View Profile</button></a>
                                        <button class="btn btn-primary" value="<?php echo $id;?>">Add to Book</button>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
</main>
</body>
</html>