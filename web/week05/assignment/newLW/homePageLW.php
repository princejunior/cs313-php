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
  <script>
    // cartItems = new Array( new Array());
    cartItemName = [];
    cartItemSpeciality = [];
    cartItemPrice = [];
    cartItemPicURL = [];
    function addToCart(name,speciality,price,picURL){
        // this.cartItems.push(name, (speciality,price,picURL));
        this.cartItemName.push(name);
        this.cartItemSpeciality.push(speciality);
        this.cartItemPrice.push(price);
        this.cartItemPicURL.push(picURL);
    //  console.log(cartItems);
     console.log(cartItemName);
     console.log(cartItemSpeciality);
     console.log(cartItemPrice);
     console.log(cartItemPicURL);

    }
    cartItemName.forEach(printOutCart); 
    for( var i =0; i < cartItemName.length; i++){
        printOutCart();
    }
    function printOutCart(){
        var text =""
        for( var i =0; i < cartItemName.length; i++){
            text += "<li> <span class='item'>  <span class='item-left'> <img style='width: 55px ; height: auto' src='"+ cartItemPicURL[i] +"' alt='' /> <span class='item-info'> <span>" + cartItemSpeciality[i] + " Program</span> <span>price: $" + cartItemsPrice[i] +"</span> </span></span><span class='item-right'><button class='btn btn-danger  fa fa-close'>Buy</button></span></span></li>";       
        }
        document.getElementById("dropBox").innerHTML = text;
    }
    </script>
</head>
<body>
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
        // $verse = $row['verse'];
        $id = $row['id'];?>
        <div class="col-md-4" style="margin-bottom: 25px;" id=<?php echo "trainers[".$i."]"?>>
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" 
                        src=" <?php echo $profile_img_url;?> " data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                        <div class="card-body">
                                <h3 class="card-title"><?php echo $name;?></h3>
                                <h5 class="card-title"><?php echo $id;?></h5>
                            <p class="card-text">
                                    Description</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href='profilePageLW.php?id=<?php echo $id?>'><button class="btn btn-primary" value="<?php echo $id?>">View Profile</button></a>
                                    <button class="btn btn-primary" value="<?php implode($trainers[$i]);?>" onclick="
                                    addToCart('<?php echo $trainers[$i][0];?>', '<?php echo $trainers[$i][1];?>', '<?php echo $trainers[$i][2];?>', '<?php echo $trainers[$i][3];?>')">Add to Book $<?php echo $trainers[$i][2];?>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <?php
        // $content = $row['content'];
        // echo "<p><strong>$book $chapter:$verse</strong> - \"$content\"<p>";
        // echo "<p><strong><a href='profilePageLW.php?id=$id'>View Profile</a></strong><p>";
                    }
?>
<?php
    // list of trainers 
    $_SESSION['trainerList'] = array(
        "trainer0"=> array("name"=>"Spencer Serranilla","speciality"=>"Cardio","price"=>20,
            "profile_img_url"=>"https://polar-waters-71288.herokuapp.com/week03/assignment/photos_LW/lwrussiantwist.jpg"),
        "trainer1"=> array("name"=>"Elijah Elliott","speciality"=>"Power Lifter","price"=>30, 
            "profile_imh_url"=>"https://polar-waters-71288.herokuapp.com/week03/assignment/photos_LW/lwPose.jpg"),
        "trainer2"=> array("name"=>"Spencer Serranilla","speciality"=>"Cardio","price"=>20,
            "profile_img_url"=>"https://polar-waters-71288.herokuapp.com/week03/assignment/photos_LW/lwrussiantwist.jpg"),
        "trainer3"=> array("name"=>"Spencer Serranilla","speciality"=>"Cardio","price"=>20,
            "profile_img_url"=>"https://polar-waters-71288.herokuapp.com/week03/assignment/photos_LW/lwrussiantwist.jpg"),
        "trainer4"=> array("name"=>"Spencer Serranilla","speciality"=>"Cardio","price"=>20,
            "profile_img_url"=>"https://polar-waters-71288.herokuapp.com/week03/assignment/photos_LW/lwrussiantwist.jpg"),
        "trainer5"=> array("name"=>"Spencer Serranilla","speciality"=>"Cardio","price"=>20,
            "profile_img_url"=>"https://polar-waters-71288.herokuapp.com/week03/assignment/photos_LW/lwrussiantwist.jpg"),
        "trainer6"=> array("name"=>"Spencer Serranilla","speciality"=>"Cardio","price"=>20,
            "profile_img_url"=>"https://polar-waters-71288.herokuapp.com/week03/assignment/photos_LW/lwrussiantwist.jpg"),
        "trainer7"=> array("name"=>"Spencer Serranilla","speciality"=>"Cardio","price"=>20,
            "profile_img_url"=>"https://polar-waters-71288.herokuapp.com/week03/assignment/photos_LW/lwrussiantwist.jpg"),
        "trainer8"=> array("name"=>"Spencer Serranilla","speciality"=>"Cardio","price"=>20,
            "profile_img_url"=>"https://polar-waters-71288.herokuapp.com/week03/assignment/photos_LW/lwrussiantwist.jpg"),
        "trainer9"=> array("name"=>"Spencer Serranilla","speciality"=>"Cardio","price"=>20,
            "profile_img_url"=>"https://polar-waters-71288.herokuapp.com/week03/assignment/photos_LW/lwrussiantwist.jpg"),
    );
    // list of trainers
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
// Displays each profile in trainer list
        function displayTrainerProfiles(){  
            $trainers = $GLOBALS['trainers']; 
            for ($i = 0; $i < $GLOBALS['sizeOfTrainerList']; $i++){?>
                <div class="col-md-4" style="margin-bottom: 25px;" id=<?php echo "trainers[".$i."]"?>>
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" 
                        src=" <?php echo $trainers[$i][3]?> " data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                        <div class="card-body">
                                <h3 class="card-title"><?php echo $trainers[$i][0];?></h3>
                                <h5 class="card-title"><?php echo $trainers[$i][1];?></h5>
                            <p class="card-text">
                                    Description</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="profilePageLW.php"><button class="btn btn-primary" value="<?php echo $i?>" onclick()="viewProfile(<?php echo $i?>)">View Profile</button></a>
                                    <button class="btn btn-primary" value="<?php implode($trainers[$i]);?>" onclick="
                                    addToCart('<?php echo $trainers[$i][0];?>', '<?php echo $trainers[$i][1];?>', '<?php echo $trainers[$i][2];?>', '<?php echo $trainers[$i][3];?>')">Add to Book $<?php echo $trainers[$i][2];?>
                                </div>
                            </div> 
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
                                <button class="btn btn-danger  fa fa-close">Buy</button>
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
                echo displayTrainerProfiles();
                ?>
                <?php // set session variables using a form 
                    if(isset($_POST['Submit'])){      
                        $_SESSION['cartItems'] = $_POST['checkedTrainers'];
                        print_r($_SESSION['cartItems']);
         }  else{
            
         }
      ?>
            </div>
        </div>
    </div>
</main>
</body>
</html>


<!-- <script type="text/javascript">
    $(document).ready(function){
        $.ajax({
            type: 'post',
            url: 'homePageLW.php',
            data:{
                total_cart_items:"totalItems"
            },
            success:function(response){
                document.getElementById("totalItems").value = response;
            }
        });
    });
    fuction cart(id){
        var ele = document.getElementById(id);
        var img_src = ele.getElementByTagName("img")[0].src;
        var name = document.getElementById(id + "_name").value;
        var price = document.getElementById(id + "_price").value;

        $.ajax({
            type: 'post',
            url: 'homePageLW.php',
            data:{
                item_src:img_src,
                item_name:name,
                item_price:price
            },
            success:function(response){
                document.getElementById("total_items").value = response;
                $('.cap_status').html("Add to Cart").fadeIn('slow').delay(2000).fadeOut('slow');
            }
        });
    }
    function showCart(){
        $.ajax({
            type: 'post',
            url:'homePageLW.php',
            data:{
                showCart: "cart"
            },
            success:function(response){
                document.getElementById("mycart").innerHtml = response;
                $("#mycart").slideToggle();
            }
        });
    }
  </script> -->

  <!-- // $_SESSION['itemsInBooking'] = array();
    // if (isset($_POST['total_cart_items'])){
    //     echo count($_SESSION['name']);
    //     exit();
    // }
    // if(isset($_POST['item_src'])){
    //     $_SESSION['name'][] = $_POST['item_name'];
    //     $_SESSION['price'][] = $_POST['item_price'];
    //     $_SESSION['src'][] = $_POST['item_src'];
    //     echo count($_SESSION['name']);
    //     exit();
    // }
    // if(isset($_POST['showcart'])){
    //     for ($i = 0; $i < count($_SESSION['src']); $i++){
    //        echo '<li>
    //                 <span class="item">
    //                     <span class="item-left">
    //                         <img style="width: 55px ; height: auto" src="<?php echo $trainers[0][3]?>" alt="" />
    //                         <span class="item-info">
    //                             <span> <?php echo $trainers[0][1]?> Program</span>
    //                             <span>price: $<?php echo $trainers[0][2]?></span>
    //                         </span>
    //                     </span>
    //                     <span class="item-right">
    //                         <button class="btn btn-danger  fa fa-close">Buy</button>
    //                     </span>
    //                 </span>
    //             </li>';
    //     }
    //     exit(); -->
    <!-- // } -->
   <!-- ?> -->