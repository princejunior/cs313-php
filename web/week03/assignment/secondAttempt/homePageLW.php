<?php session_start();
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
    class BookItems {
      // Properties
        private $items = array(array());
        public $itemsLength;
        private $numberOfTimes;
      
      // Methods
    //   function setItems($trainers) {
    //     $this->numberOfTimes += 1;
    //     $numberOfTimes = $this->numberOfTimes;   
             
    //     for ($row = 0; $row < 4; $row++) {
    //         for ($col = 0; $col < 3; $col++) {
    //          $this->items[$row][$col] += $trainers[$row][$col];
    //         }
    //       }
    //      echo "S" .$this->numberOfTimes . "E";
    // }
    //   function setItems($trainersName, $trainersSpecialty, $trainersPrice, $trainersPhoto) {
    //     $this->numberOfTimes += 1;
    //     $numberOfTimes = $this->numberOfTimes;   
             
    //     for ($i = 0; $i < 4; $i++){
    //         $this->items += array(
    //             array($trainersName,$trainersSpecialty,$trainersPrice, $trainersPhoto)
    //         );
    //     }
        
    //     // echo "S" .$this->numberOfTimes . "E";
    //   }
      function getItemsLength(){
        return $this->itemsLength = sizeof($this->items);
      }
      function getItems() {
        return $this->items;
      } 
    }
    ?>
    <?php  $bookItems = new BookItems();?>
<?php
        $allItems = $bookItems->getItems();
        // $itemsLength = sizeof($allItems);        
        $itemsLength = $bookItems->getItemsLength();
        function displayBooking(){
            echo $GLOBALS['itemsLength'];
            for($i = 0; $i < $GLOBALS['itemsLength']; $i++){
            echo '<li>
            <span class="item">
                           <span class="item-left">
                                <img style="width: 55px ; height: auto" src="<?php echo $itemTrainers[0][3]?>" alt="" />
                                <span class="item-info">
                                    <span><?php echo $itemTrainers[0][1]?> Program</span>
                                    <span>price: $<?php echo $itemTrainers[0][2]?></span>
                                </span>
                            </span>
                            <span class="item-right">
                                <button class="btn btn-danger  fa fa-close">Buy</button>
                            </span>
                        </span>
                    </li>';
            } 
          }
    ?>
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
        $sizeOfTrainerList = sizeof($trainers);
        function displayTrainerProfiles(){  
            $trainers = $GLOBALS['trainers']; 
            for ($i = 0; $i < $GLOBALS['sizeOfTrainerList']; $i++){?>
                <div class="col-md-4" style="margin-bottom: 25px;">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" 
                        src=" <?php echo $trainers[$i][3]?> " data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                        <div class="card-body">
                                <h3 class="card-title"><?php echo $trainers[$i][0]?></h3>
                                <h5 class="card-title"><?php echo $trainers[$i][1]?></h5>
                            <!-- <p class="card-text">
                                    Spencer Serranilla</p> -->
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-primary">View Profile</a>
                                    <input type="checkbox" name="checkedTrainers[][]" value="<?php echo $trainers[$i];?>">
                                    <!-- <button type="submit" class="btn btn-primary" name="<?php echo $trainers[$i];?>">Add to Book <?php echo $trainers[$i][2]?></a> -->
                                </div>
                            </div>
                    <!-- <?php $GLOBALS['$bookItems->setItems($trainers[$i][0],$trainers[$i][1],$trainers[$i][2],$trainers[$i][3])'];?> -->
                        </div>
                    </div>
                </div>
            <?php }
        }
    ?>



<nav class="navbar navbar-inverse" >
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Live W.O.W.</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <!-- <li class="dropdown"> -->
            <li><a href="#">Trainers</a></li>
        <!-- </li> -->
        <li><a href="#">Nutrionist</a></li>
        <li><a href="#">Physical Therapist</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="fa fa-gift bigicon"></span> Booking<span class="caret"></span></a>
                <ul class="dropdown-menu dropdown-cart" role="menu">
                <!-- <?php $totalItems = new BookItems()?> -->
                <!--  -->
                <?php 
                    // for ($row = 0; $row < sizeof($trainers); $row++){
                    //     for($col = 0; $col = sizeof($trainers); $col++){
                    //         $bookItems->setItems($trainers[$row][$col]);
                    //     }
                    // }
                    //  echo displayBooking()?>
                     <!--  -->
                <?php 
                    // for ($i = 0; $i < sizeof($trainers); $i++){
                    //     $bookItems->setItems($trainers[$i][0],$trainers[$i][1],$trainers[$i][2],$trainers[$i][3]);
                    // }
                     echo displayBooking()?>
                    <li>
                        <span class="item">
                           <span class="item-left">
                                <img style="width: 55px ; height: auto" src="<?php echo $trainers[0][3]?>" alt="" />
                                <span class="item-info">
                                    <span><?php echo $trainers[0][1]?> Program</span>
                                    <span>price: $<?php echo $trainers[0][2]?></span>
                                </span>
                            </span>
                            <span class="item-right">
                                <button class="btn btn-danger fa fa-close">Buy</button>
                            </span>
                        </span>
                    </li>
                    <li>
                        <span class="item">
                            <span class="item-left">
                                <img style="width: 55px ; height: auto" src="<?php echo $trainers[1][3]?>" alt="" />
                                <span class="item-info">
                                    <span><?php echo $trainers[1][1]?></span>
                                    <span>price: $<?php echo $trainers[1][2]?></span>
                                </span>
                            </span>
                            <span class="item-right">
                                <button class="btn btn-danger  fa fa-close"></button>
                            </span>
                        </span>
                    </li>
                    <li>
                        <span class="item">
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
                    </li>
                    <li>
                        <span class="item">
                            <span class="item-left">
                                <img src="http://www.prepbootstrap.com/Content/images/template/menucartdropdown/item_4.jpg" alt="" />
                                <span class="item-info">
                                    <span>Item name</span>
                                    <span>price: 7$</span>
                                </span>
                            </span>
                            <span class="item-right">
                                <button class="btn btn-danger  fa fa-close"></button>
                            </span>
                        </span>
                    </li>              
                    <li class="divider"></li>
                    <li><a class="text-center" href="viewCartLW.php">View Cart</a></li>
                </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div></nav>

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
        <form action="viewCartLW.php" method="post">
            <div class="row">
                <?php echo displayTrainerProfiles();?>
                    <button type="submit" name="Submit" class="btn btn-primary">Add Trainer's Services to Book</a>
                </form>
                <?php // set session variables using a form 
            if(isset($_POST['Submit'])){
            $_SESSION['cartItems[][]'] = $_POST['checkedTrainers[][]'];
         }
      ?>
            </div>
        </div>
    </div>
</main>
</body>
</html>

