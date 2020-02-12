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
                        <li class="divider">
                        </li>
                        <li><a class="text-center" href="#">View Cart</a>
                        </li>
                    </ul>
                </li>
                <li><a href="clientProfilePage.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                <li><a href="clientSignInPage.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>
<?php
    $id = $_GET['id'];
    $statement = $db->prepare("SELECT * FROM trainer WHERE id = $id");
    $statement->execute();
    while ($row = $statement->fetch(PDO::FETCH_ASSOC))
    {
      $name = $row['name'];
      $profile_img_url = $row['profile_img_url'];
      $speciality = $row['speciality'];
    }
?>
  <!-- Accessed from trainer id -->
  <form>
  <section class="probootstrap-intro probootstrap-intro-inner" 
    style="background-image: url(&quot;<?php echo $profile_img_url;?>&quot;); background-position: 0px 0px;" data-stellar-background-ratio="0.5"> 
  <div class="container">
      <div class="row">
        <div class="col-md-7 probootstrap-intro-text">
          <h1 class="probootstrap-animate fadeIn probootstrap-animated" data-animate-effect="fadeIn"><span><?php echo $name;?></span></h1>
          <div class="probootstrap-subtitle probootstrap-animate fadeIn probootstrap-animated" data-animate-effect="fadeIn">
            <h2>Personal Trainer</a></h2>
          </div>
        </div>
      </div>
    </div>
    <span class="probootstrap-animate fadeInUp probootstrap-animated">
        <a class="probootstrap-scroll-down js-next" href="#next-section">Scroll down <i class="icon-chevron-down"></i></a>
    </span>
  </section>
  <!-- END: section -->
  <main>
    <section id="next-section" class="probootstrap-section">
        <div class="container">
            <div class="row probootstrap-gutter60 mb50">
                <div class="col-md-6">
                    <figure><img src="<?php echo $profile_img_url;?>" lt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                </div>
                <?php 
                  $aboutMe = "The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.
                  Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.";
                ?>
                <div class="col-md-6">
                    <h2 class="probootstrap-heading">About Me</h2>
                    <textarea  class="inputVision" placeholder="<?php echo $aboutMe;?>" rows="4" cols="50"></textarea>
                    <!-- <input class="inputAboutMe" type="text" maxlength="500" placeholder="<?php echo $aboutMe;?>"> -->
                    <!-- <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    <p><a href="#" class="btn btn-primary">Read more about me</a></p> -->
                </div>
            </div>
            <?php 
              $myMission = "Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.";
            ?>
            <div class="row probootstrap-gutter60">
                <div class="col-md-4 mb30">
                    <h4 class="mb30">My Mission</h4>
                    <textarea  class="inputVision" placeholder="<?php echo $myMission;?>" rows="4" cols="50"></textarea>
                    <!-- <input class="inputMission" type="text" maxlength="200" placeholder="<?php echo $myMission;?>">                     -->
                    <!-- <p>“Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.”</p> -->
                </div>
                <div class="col-md-4 mb30">
                    <h4 class="mb30">Upcoming Events</h4>
                    <ul class="probootstrap-blog-list">
                        <li>
                            <a href="#">
                                <figure class="probootstrap-image"><img src="img/img_4.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                                <div class="probootstrap-text">
                                    <h4>Initial into the belt and made herself</h4>
                                    <span class="meta">September, 14 2017</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <figure class="probootstrap-image"><img src="img/img_5.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                                <div class="probootstrap-text">
                                    <h4>Far far away behind the word mountains</h4>
                                    <span class="meta">September, 14 2017</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <figure class="probootstrap-image"><img src="img/img_6.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                                <div class="probootstrap-text">
                                    <h4>Bookmarksgrove right at the coast of the Semantics</h4>
                                    <span class="meta">September, 14 2017</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <?php 
                  $myVision = "The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.";
                ?>
                <div class="col-md-4 mb30">
                    <h4 class="mb30">My Vision</h4>
                    <textarea  class="inputVision" placeholder="<?php echo $myVision;?>" rows="4" cols="50"></textarea>
                    <!-- <input class="inputVision" type="text" maxlength="200" placeholder="<?php echo $myVision;?>">                     -->
                    <!-- <p>“The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.”</p> -->
                </div>
            </div>
        </div>
    </section>
    <section id="next-section" class="probootstrap-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 probootstrap-relative">
            <h2 class="probootstrap-heading mt0 mb50">Programs (For Beginners)
              <a href='editTrainerProfile.php?id=<?php echo $id?>' class="probootstrap-owl-navigation absolute left"><button><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>Add Programs</button></a>            
            </h2>
            
            <ul class="probootstrap-owl-navigation absolute right">
              <li><a href="#" class="probootstrap-owl-prev"><i class="icon-chevron-left"></i></a></li>
              <li><a href="#" class="probootstrap-owl-next"><i class="icon-chevron-right"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 probootstrap-relative">
            <div class="owl-carousel owl-carousel-carousel owl-theme owl-loaded">
              <div class="owl-stage-outer owl-height" style="height: 480px;">
                <div class="owl-stage" style="transform: translate3d(-740px, 0px, 0px); transition: 0s; width: 4070px;">
                  <div class="owl-item cloned" style="width: 350px; margin-right: 20px;">
                    <div class="item">    
                      <div class="probootstrap-program">
                        <a href="#"><img src="img/img_6.jpg" alt="" class="img-responsive img-rounded"></a>
                        <h3>DIP</h3>
                        <p>Sets: 3, Reps: 8-10, Rest: 30 sec.</p>
                        <p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                      </div>
                    </div>
                  </div>
                  <?php
                    // $id = $_GET['id'];
                    // $statement = $db->prepare("SELECT * FROM content WHERE trainer_id = $id AND difficulty = 'Beginner'");
                    // $statement->execute();
                    // // Go through each result
                    // while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
                    //   // The variable "row" now holds the complete record for that
                    //   // row, and we can access the different values based on their
                    //   // name
                    //   $post_img_url = $row['post_img_url'];
                    //   $post_description = $row['post_description'];
                    //   $post_price = $row['post_price'];
                    //   $post_difficulty = $row['difficulty'];
                    //   $post_title = $row['title'];
                  ?>
                  <!-- <div class="owl-item active" style="width: 350px; margin-right: 20px;">
                    <div class="item">
                      <div class="probootstrap-program">
                        <a href="#"><img src="<?php echo $post_img_url;?>" alt="<?php echo $post_title;?>" class="img-responsive img-rounded"></a>
                        <h3><?php echo $post_title;?></h3>
                        <p><?php echo $post_price;?></p>
                        <p><?php echo $post_description;?></p>
                      </div>
                    </div>
                  </div> -->
                  <?php
                    // }
                  ?>  
                  <div class="owl-item active" style="width: 350px; margin-right: 20px;">
                    <div class="item">
                      <div class="probootstrap-program">
                        <a href="#"><img src="img/img_2.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
                        <h3>Push Up</h3>
                        <p>Sets: 3, Reps: 8-10, Rest: 30 sec.</p>
                        <p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 350px; margin-right: 20px;">
                    <div class="item">
                      <div class="probootstrap-program">
                        <a href="#"><img src="img/img_3.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
                        <h3>Reverse Lunge</h3>
                        <p>Sets: 3, Reps: 8-10, Rest: 30 sec.</p>
                        <p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 350px; margin-right: 20px;">
                    <div class="item">
                      <div class="probootstrap-program">
                        <a href="#"><img src="img/img_4.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
                        <h3>Dumbbell Overhead Press</h3>
                        <p>Sets: 3, Reps: 8-10, Rest: 30 sec.</p>
                        <p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 350px; margin-right: 20px;">
                    <div class="item">
                      <div class="probootstrap-program">
                        <a href="#"><img src="img/img_5.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
                        <h3>Bulgarian Split Squat</h3>
                        <p>Sets: 3, Reps: 8-10, Rest: 30 sec.</p>
                        <p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 350px; margin-right: 20px;">
                    <div class="item">
                      <div class="probootstrap-program">
                        <a href="#"><img src="img/img_6.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
                        <h3>DIP</h3>
                        <p>Sets: 3, Reps: 8-10, Rest: 30 sec.</p>
                        <p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                      </div>
                    </div> -->
                  </div>
                  <div class="owl-item" style="width: 350px; margin-right: 20px;">
                    <div class="item">
                      <div class="probootstrap-program">
                        <a href="#"><img src="img/img_7.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
                        <h3>Russian Twist</h3>
                        <p>Sets: 3, Reps: 8-10, Rest: 30 sec.</p>
                        <p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 350px; margin-right: 20px;">
                    <div class="item">
                      <div class="probootstrap-program">
                        <a href="#"><img src="img/img_1.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
                        <h3>Dumbbell Squat</h3>
                        <p>Sets: 3, Reps: 8-10, Rest: 30 sec.</p>
                        <p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 350px; margin-right: 20px;">
                    <div class="item">
                      <div class="probootstrap-program">
                        <a href="#"><img src="img/img_2.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
                        <h3>Push Up</h3>
                        <p>Sets: 3, Reps: 8-10, Rest: 30 sec.</p>
                        <p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="owl-controls">
                <div class="owl-nav">
                  <div class="owl-prev" style="display: none;">
                    <i class="icon-keyboard_arrow_left owl-direction"></i>
                  </div>
                  <div class="owl-next" style="display: none;">
                    <i class="icon-keyboard_arrow_right owl-direction"></i>
                  </div>
                </div>
                <div class="owl-dots" style="display: none;">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="probootstrap-section probootstrap-border-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12 probootstrap-relative">
            <h2 class="probootstrap-heading mt0 mb50">Programs (For Intermediate)</h2>
            <ul class="probootstrap-owl-navigation absolute right">
              <li><a href="#" class="probootstrap-owl-prev2"><i class="icon-chevron-left"></i></a></li>
              <li><a href="#" class="probootstrap-owl-next2"><i class="icon-chevron-right"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 probootstrap-relative">
            <div class="owl-carousel owl-carousel-carousel2 owl-theme owl-loaded">
            <div class="owl-stage-outer owl-height" style="height: 480px;"><div class="owl-stage" style="transform: translate3d(-740px, 0px, 0px); transition: 0s; width: 4070px;"><div class="owl-item cloned" style="width: 350px; margin-right: 20px;"><div class="item">
                <div class="probootstrap-program">
                  <a href="#"><img src="img/img_6.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
                  <h3>DIP</h3>
                  <p>Sets: 3, Reps: 8-10, Rest: 30 sec.</p>
                  <p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                </div>
              </div></div><div class="owl-item cloned" style="width: 350px; margin-right: 20px;"><div class="item">
                <div class="probootstrap-program">
                  <a href="#"><img src="img/img_7.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
                  <h3>Russian Twist</h3>
                  <p>Sets: 3, Reps: 8-10, Rest: 30 sec.</p>
                  <p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                </div>
                <?php
                  $id = $_GET['id'];
                  $statement = $db->prepare("SELECT * FROM content WHERE trainer_id = $id AND difficulty = 'Intermediate'");
                  $statement->execute();
                  // Go through each result
                  while ($row = $statement->fetch(PDO::FETCH_ASSOC))
                  {
                    // The variable "row" now holds the complete record for that
                    // row, and we can access the different values based on their
                    // name
                    $post_img_url = $row['post_img_url'];
                    $post_description = $row['post_description'];
                    $post_price = $row['post_price'];
                    $post_difficulty = $row['difficulty'];
                    $post_title = $row['title'];?>
              <div class="owl-item active" style="width: 350px; margin-right: 20px;"><div class="item">
                <div class="probootstrap-program">
                  <a href="#"><img src="<?php echo $post_img_url;?>" alt="<?php echo $post_title;?>" class="img-responsive img-rounded"></a>
                  <h3><?php echo $post_title;?></h3>
                  <p><?php echo $post_price?></p>
                  <p><?php echo $post_description;?></p>
                </div>
              </div>
            </div>

              <?php
            }
         ?>  
              </div></div><div class="owl-item active" style="width: 350px; margin-right: 20px;"><div class="item">
                <div class="probootstrap-program">
                  <a href="#"><img src="img/img_1.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
                  <h3>Dumbbell Squat</h3>
                  <p>Sets: 3, Reps: 8-10, Rest: 30 sec.</p>
                  <p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                </div>
              </div></div><div class="owl-item active" style="width: 350px; margin-right: 20px;"><div class="item">
                <div class="probootstrap-program">
                  <a href="#"><img src="img/img_2.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
                  <h3>Push Up</h3>
                  <p>Sets: 3, Reps: 8-10, Rest: 30 sec.</p>
                  <p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                </div>
              </div></div><div class="owl-item" style="width: 350px; margin-right: 20px;"><div class="item">
                <div class="probootstrap-program">
                  <a href="#"><img src="img/img_3.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
                  <h3>Reverse Lunge</h3>
                  <p>Sets: 3, Reps: 8-10, Rest: 30 sec.</p>
                  <p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                </div>
              </div></div><div class="owl-item" style="width: 350px; margin-right: 20px;"><div class="item">
                <div class="probootstrap-program">
                  <a href="#"><img src="img/img_4.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
                  <h3>Dumbbell Overhead Press</h3>
                  <p>Sets: 3, Reps: 8-10, Rest: 30 sec.</p>
                  <p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                </div>
              </div></div><div class="owl-item" style="width: 350px; margin-right: 20px;"><div class="item">
                <div class="probootstrap-program">
                  <a href="#"><img src="img/img_5.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
                  <h3>Bulgarian Split Squat</h3>
                  <p>Sets: 3, Reps: 8-10, Rest: 30 sec.</p>
                  <p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                </div>
              </div></div><div class="owl-item" style="width: 350px; margin-right: 20px;"><div class="item">
                <div class="probootstrap-program">
                  <a href="#"><img src="img/img_6.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
                  <h3>DIP</h3>
                  <p>Sets: 3, Reps: 8-10, Rest: 30 sec.</p>
                  <p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                </div>
              </div></div><div class="owl-item" style="width: 350px; margin-right: 20px;"><div class="item">
                <div class="probootstrap-program">
                  <a href="#"><img src="img/img_7.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
                  <h3>Russian Twist</h3>
                  <p>Sets: 3, Reps: 8-10, Rest: 30 sec.</p>
                  <p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                </div>

              </div></div><div class="owl-item cloned" style="width: 350px; margin-right: 20px;"><div class="item">
                <div class="probootstrap-program">
                  <a href="#"><img src="img/img_1.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
                  <h3>Dumbbell Squat</h3>
                  <p>Sets: 3, Reps: 8-10, Rest: 30 sec.</p>
                  <p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                </div>
              </div></div><div class="owl-item cloned" style="width: 350px; margin-right: 20px;"><div class="item">
                <div class="probootstrap-program">
                  <a href="#"><img src="img/img_2.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
                  <h3>Push Up</h3>
                  <p>Sets: 3, Reps: 8-10, Rest: 30 sec.</p>
                  <p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                </div>
              </div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style="display: none;"><i class="icon-keyboard_arrow_left owl-direction"></i></div><div class="owl-next" style="display: none;"><i class="icon-keyboard_arrow_right owl-direction"></i></div></div><div class="owl-dots" style="display: none;"></div></div></div>
          </div>
        </div>
      </div>
    </section>
    <section class="probootstrap-section probootstrap-border-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12 probootstrap-relative">
            <h2 class="probootstrap-heading mt0 mb50">Programs (For Advance)</h2>
            <ul class="probootstrap-owl-navigation absolute right">
              <li><a href="#" class="probootstrap-owl-prev3"><i class="icon-chevron-left"></i></a></li>
              <li><a href="#" class="probootstrap-owl-next3"><i class="icon-chevron-right"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 probootstrap-relative">
            <div class="owl-carousel owl-carousel-carousel3 owl-theme owl-loaded">
            <div class="owl-stage-outer owl-height" style="height: 480px;"><div class="owl-stage" style="transform: translate3d(-740px, 0px, 0px); transition: 0s; width: 4070px;"><div class="owl-item cloned" style="width: 350px; margin-right: 20px;"><div class="item">
                <div class="probootstrap-program">
                  <a href="#"><img src="img/img_6.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
                  <h3>DIP</h3>
                  <p>Sets: 3, Reps: 8-10, Rest: 30 sec.</p>
                  <p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                </div>
              </div></div><div class="owl-item cloned" style="width: 350px; margin-right: 20px;"><div class="item">
                <div class="probootstrap-program">
                  <a href="#"><img src="img/img_7.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
                  <h3>Russian Twist</h3>
                  <p>Sets: 3, Reps: 8-10, Rest: 30 sec.</p>
                  <p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                </div>

              </div></div><div class="owl-item active" style="width: 350px; margin-right: 20px;"><div class="item">
                <div class="probootstrap-program">
                  <a href="#"><img src="img/img_1.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
                  <h3>Dumbbell Squat</h3>
                  <p>Sets: 3, Reps: 8-10, Rest: 30 sec.</p>
                  <p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                </div>
              </div></div><div class="owl-item active" style="width: 350px; margin-right: 20px;"><div class="item">
                <div class="probootstrap-program">
                  <a href="#"><img src="img/img_2.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
                  <h3>Push Up</h3>
                  <p>Sets: 3, Reps: 8-10, Rest: 30 sec.</p>
                  <p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                </div>
              </div></div><div class="owl-item" style="width: 350px; margin-right: 20px;"><div class="item">
                <div class="probootstrap-program">
                  <a href="#"><img src="img/img_3.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
                  <h3>Reverse Lunge</h3>
                  <p>Sets: 3, Reps: 8-10, Rest: 30 sec.</p>
                  <p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                </div>
              </div></div><div class="owl-item" style="width: 350px; margin-right: 20px;"><div class="item">
                <div class="probootstrap-program">
                  <a href="#"><img src="img/img_4.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
                  <h3>Dumbbell Overhead Press</h3>
                  <p>Sets: 3, Reps: 8-10, Rest: 30 sec.</p>
                  <p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                </div>
              </div></div><div class="owl-item" style="width: 350px; margin-right: 20px;"><div class="item">
                <div class="probootstrap-program">
                  <a href="#"><img src="img/img_5.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
                  <h3>Bulgarian Split Squat</h3>
                  <p>Sets: 3, Reps: 8-10, Rest: 30 sec.</p>
                  <p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                </div>
              </div></div><div class="owl-item" style="width: 350px; margin-right: 20px;"><div class="item">
                <div class="probootstrap-program">
                  <a href="#"><img src="img/img_6.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
                  <h3>DIP</h3>
                  <p>Sets: 3, Reps: 8-10, Rest: 30 sec.</p>
                  <p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                </div>
              </div></div><div class="owl-item" style="width: 350px; margin-right: 20px;"><div class="item">
                <div class="probootstrap-program">
                  <a href="#"><img src="img/img_7.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
                  <h3>Russian Twist</h3>
                  <p>Sets: 3, Reps: 8-10, Rest: 30 sec.</p>
                  <p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                </div>

              </div></div><div class="owl-item cloned" style="width: 350px; margin-right: 20px;"><div class="item">
                <div class="probootstrap-program">
                  <a href="#"><img src="img/img_1.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
                  <h3>Dumbbell Squat</h3>
                  <p>Sets: 3, Reps: 8-10, Rest: 30 sec.</p>
                  <p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                </div>
              </div></div><div class="owl-item cloned" style="width: 350px; margin-right: 20px;"><div class="item">
                <div class="probootstrap-program">
                  <a href="#"><img src="img/img_2.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
                  <h3>Push Up</h3>
                  <p>Sets: 3, Reps: 8-10, Rest: 30 sec.</p>
                  <p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                </div>
              </div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style="display: none;"><i class="icon-keyboard_arrow_left owl-direction"></i></div><div class="owl-next" style="display: none;"><i class="icon-keyboard_arrow_right owl-direction"></i></div></div><div class="owl-dots" style="display: none;"></div></div></div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer class="probootstrap-footer">
      <div class="probootstrap-backtotop"><a href="#" class="js-backtotop"><i class="icon-chevron-thin-up"></i></a></div>
      <div class="container">
      <div class="row mb50">
        <div class="col-md-3">
          <div class="probootstrap-footer-widget">
            <h4>About The Site</h4>
            <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli. <a href="#">Learn More</a></p>
          </div>
        </div>
        <div class="col-md-3 col-md-push-1">
          <div class="probootstrap-footer-widget">
            <h4>Gym Hours</h4>
            <ul class="probootstrap-footer-link">
              <li>Week Days: 05:00 – 22:00</li>
              <li>Saturday: CLOSED</li>
              <li>Sunday: 05:00 - 22:00</li>
            </ul>
          </div>
        </div>
        <div class="col-md-5 col-md-push-1">
          <div class="probootstrap-footer-widget">
            <h4>Links</h4>
            <ul class="probootstrap-footer-link float">
              <li><a href="#">Home</a></li>
              <li><a href="#">Programs</a></li>
              <li><a href="#">Gallery</a></li>
            </ul>
            <ul class="probootstrap-footer-link float">
              <li><a href="#">About Me</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">Privacy</a></li>
            </ul>
            <ul class="probootstrap-footer-link float">
              <li><a href="#">About Me</a></li>
              <li><a href="#">Join The Club</a></li>
              <li><a href="#">Pricing</a></li>
            </ul>
          </div>
          <div class="probootstrap-footer-widget">
            <h4>Contact Info</h4>
            <ul class="probootstrap-contact-info">
              <li><i class="icon-location2"></i> <span>198 West 21th Street, Suite 721 New York NY 10016</span></li>
              <li><i class="icon-mail"></i><span>info@domain.com</span></li>
              <li><i class="icon-phone2"></i><span>+123 456 7890</span></li>
            </ul>
          </div>
        </div>        
      </div>
       <div class="row">
         <div class="col-md-12 text-center border-top">
           <p class="mb0">© Copyright 2017 <a href="https://uicookies.com/">uiCookies:Trainer</a>. All Rights Reserved. <br> Designed by <a href="https://uicookies.com">uicookies.com</a> Demo Images Unsplash.com &amp; Pexels.com</p>
         </div>
       </div>
     </div>
  </form>
  </footer>  
  <script src="trainer/js/scripts.min.js"></script>
  <script src="trainer/js/main.min.js"></script>
  <script src="trainer/js/custom.js"></script>
</body>
</html>