<?php session_start();
    $_SESSION['itemsInBooking'] = array();
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Live W.O.W.</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" type="text/css" href="homeStylePAge.css">
  <!--  -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Creates a drop down menu for cart -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<?php
    $trainers = array(
        //Name:$trainers[0][0], Specialist:$trainers[0][1], Cost for service:$trainers[0][2], photo: $trainers[0][3]
        array("Spencer Serranilla","Cardio",20,
         "https://polar-waters-71288.herokuapp.com/week03/assignment/photos_LW/lwrussiantwist.jpg"),
        //Name:$trainers[1][0], Specialist:$trainers[1][1], Cost for service:$trainers[1][2], photo: $trainers[0][3]
        array("Elijah Elliott","Power Lifter",30, 
        "https://polar-waters-71288.herokuapp.com/week03/assignment/photos_LW/lwPose.jpg"),
        //Name:$trainers[2][0], Specialist:$trainers[2][1], Cost for service:$trainers[2][2], photo: $trainers[0][3]
        array("Meghan Hutson"," Yoga",25, ""),
        //Name:$trainers[3][0], Specialist:$trainers[3][1], Cost for service:$trainers[3][2], photo: $trainers[0][3]
        array("Pete The Pilot","Hyper Trophy",45, ""),
        //Name:$trainers[4][0], Specialist:$trainers[4][1], Cost for service:$trainers[4][2], photo: $trainers[0][3]
        array("Elon Musk","Power Lifter",55,""),
        //Name:$trainers[5][0], Specialist:$trainers[5][1], Cost for service:$trainers[5][2], photo: $trainers[0][3]
        array("Steve Job","Yoga",55, ""),
        //Name:$trainers[6][0], Specialist:$trainers[6][1], Cost for service:$trainers[6][2], photo: $trainers[0][3]
        array("Nikola Tesla","Cardio",25, ""),
        //Name:$trainers[7][0], Specialist:$trainers[7][1], Cost for service:$trainers[7][2], photo: $trainers[0][3]
        array("Bill Gates","Crossfit",65, ""),
        //Name:$trainers[8][0], Specialist:$trainers[8][1], Cost for service:$trainers[8][2], photo: $trainers[0][3]
        array("Jeff Bezos","Pilates",55, "")
    );
    ?>
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
                <li><a href="viewCartLW.php"><span class="glyphicon glyphicon-shopping-cart"></span>Booking</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
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
    <form action="" method="POST">
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
            
                <div class="col-md-4" style="margin-bottom: 25px;">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" 
                        src=" <?php echo $trainers[0][3]?> " data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                        <div class="card-body">
                                <h3 class="card-title"><?php echo $trainers[0][0]?></h3>
                                <h5 class="card-title"><?php echo $trainers[0][1]?></h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary" name="<?php echo $trainers[0];?>">Add to Book <?php echo $trainers[0][2]?></a>
                                    <input type="checkbox" name="checked_Trainers[]" value="trainer[0]">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="margin-bottom: 25px;">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" 
                        src=" <?php echo $trainers[1][3]?> " data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                        <div class="card-body">
                                <h3 class="card-title"><?php echo $trainers[1][0]?></h3>
                                <h5 class="card-title"><?php echo $trainers[1][1]?></h5>
                            <!-- <p class="card-text">
                                    Spencer Serranilla</p> -->
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary" name="<?php echo $trainers[1];?>">Add to Book <?php echo $trainers[0][2]?></a>
                                    <input type="checkbox" name="checked_Trainers[]" value="trainer[1]">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="margin-bottom: 25px;">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" 
                        src=" <?php echo $trainers[2][3]?> " data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                        <div class="card-body">
                                <h3 class="card-title"><?php echo $trainers[2][0]?></h3>
                                <h5 class="card-title"><?php echo $trainers[2][1]?></h5>
                            <!-- <p class="card-text">
                                    Spencer Serranilla</p> -->
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary" name="<?php echo $trainers[2];?>">Add to Book <?php echo $trainers[2][2]?></a>
                                    <input type="checkbox" name="checked_trainers[]" value="trainer[2]">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <button type="submit" name="Submit" class="btn btn-primary">Add Trainer's Services to Book</a>
            <?php // set session variables using a form 
                    if(isset($_POST['Submit'])){//to run PHP script on submit
                        echo "isset has ran";
                        if(!empty($_POST['check_trainers'])){
                            echo "not empty";
                        // Loop to store and display values of individual checked checkbox.
                        foreach($_POST['check_trainers'] as $selected){
                        echo $selected."</br>";
                        }
                    }  
                }
      ?>
            
            </div>
            
        </div>
    </div>
    </form> 
           
    </main>
<form action="viewCartLW.php" method="post">
        <input type="checkbox" name="checked_trainer[]" value="trainer[0]">
        <input type="checkbox" name="checked_trainer[]" value="trainer[1]">
        <input type="checkbox" name="checked_trainer[]" value="trainer[2]">
        <button type="submit" name="ubmit" class="btn btn-primary">Add Trainer's Services to Book</a>
            </form>
            <?php // set session variables using a form 
                    if(isset($_POST['ubmit'])) {
                        $_SESSION['item'] = $_POST['checked_trainer'];
                     }
      ?>
            
</body>
</html>

