<?php
    session_start();
    require "dbConnect.php";
    $db = get_db();
    $_SESSION['customer_type'];
    $trainer_id = $_GET['trainer_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Live W.O.W.</title>
    <meta name="description" content="">    
    <link href="https://fonts.googleapis.com/css?family=Inconsolata|Rubik:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="trainer/css/styles-merged.css">
    <link rel="stylesheet" href="trainer/css/style.min.css">
    <link rel="stylesheet" href="trainer/css/custom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Creates a drop down menu for cart -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <!-- To add and clear items from booking/cart -->
  <script type="text/javascript" src="trainer/js/vendor/jquery.min.js"></script>
  
  </head>
<body>
<?php require 'navBarLW.php'?>
<?php
  // $id = $_GET['id'];
  $statement = $db->prepare("SELECT * FROM trainer WHERE id = $trainer_id");
  $statement->execute();
  while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $profile_img_url = $row['profile_img_url'];
    $speciality = $row['speciality'];
  }
  $statement2 = $db->prepare("SELECT * FROM trainer_description WHERE trainer_id = $trainer_id");
  $statement2->execute();
  while ($row2 = $statement2->fetch(PDO::FETCH_ASSOC)){
    $about_me = $row2['about_me'];
    $my_mission = $row2['my_mission'];
    $my_vision = $row2['my_vision'];
  }

?>
  <!-- END: header -->
  
  <!-- START: section -->
  <section class="probootstrap-intro probootstrap-intro-inner" style="background-image: url(&quot;<?php echo $profile_img_url;?>&quot;); background-position: 0px 0px;" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-7 probootstrap-intro-text">
          <h1 class="probootstrap-animate fadeIn probootstrap-animated" data-animate-effect="fadeIn" style="color:rgb(255, 255, 255);">
            <span><?php echo $first_name;?></span>
            <?php echo $last_name;?>
          </h1>
          <div class="probootstrap-subtitle probootstrap-animate fadeIn probootstrap-animated" data-animate-effect="fadeIn">
            <h2 style="color:rgb(255, 255, 255);">Personal Trainer</a></h2>
          </div>
        </div>
      </div>
    </div>
    <span class="probootstrap-animate fadeInUp probootstrap-animated"><a class="probootstrap-scroll-down js-next" href="#next-section">Scroll down <i class="icon-chevron-down"></i></a></span>
  </section>
  <!-- END: section -->
<main>
  <section id="next-section" class="probootstrap-section">
    <div class="container">
      <div class="row probootstrap-gutter60 mb50">
        <div class="col-md-6">
          <figure><img src="<?php echo $profile_img_url;?>" lt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
        </div>
        <div class="col-md-6">
          <h2 class="probootstrap-heading">About Me</h2>
            <?php echo $about_me;?>
        </div>
      </div>
      <div class="row probootstrap-gutter60">
        <div class="col-md-4 mb30">
          <h4 class="mb30">My Mission</h4>
          <div>
            <?php echo $my_mission;?>
          </div>
        </div>
        <div class="col-md-4 mb30">
          <h4 class="mb30">Upcoming Events</h4>
          <ul class="probootstrap-blog-list">
            <li>
              <a href="#">
                <figure class="probootstrap-image"><img src="trainer/img/img_4.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                <div class="probootstrap-text">
                  <h4>Initial into the belt and made herself</h4>
                  <span class="meta">September, 14 2017</span>
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <figure class="probootstrap-image"><img src="trainer/img/img_5.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                <div class="probootstrap-text">
                  <h4>Far far away behind the word mountains</h4>
                  <span class="meta">September, 14 2017</span>
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <figure class="probootstrap-image"><img src="trainer/img/img_6.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                <div class="probootstrap-text">
                  <h4>Bookmarksgrove right at the coast of the Semantics</h4>
                  <span class="meta">September, 14 2017</span>
                </div>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4 mb30">
          <h4 class="mb30">My Vision</h4>
          <div>
            <?php echo $my_vision;?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="next-section" class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 probootstrap-relative">
          <h2 class="probootstrap-heading mt0 mb50">Programs (For Beginners)</h2>
          <ul class="probootstrap-owl-navigation absolute right">
            <li><a href="#" class="probootstrap-owl-prev"><i class="icon-chevron-left"></i></a></li>
            <li><a href="#" class="probootstrap-owl-next"><i class="icon-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 probootstrap-relative">
          <!-- <div class="owl-carousel owl-carousel-carousel owl-theme owl-loaded"> -->
          <div class="owl-carousel owl-carousel-carousel">
                <?php
                  echo "it stops after this";
                  $statement3 = $db->prepare("SELECT * FROM content WHERE trainer_id = $trainer_id AND difficulty = 'Beginner'");
                  $statement3->execute();
                  while ($row3 = $statement3->fetch(PDO::FETCH_ASSOC)){
                    $post_img_url = $row3['post_img_url'];
                    $post_description = $row3['post_description'];
                    $post_price = $row3['post_price'];
                    $post_difficulty = $row3['difficulty'];
                    $post_title = $row3['title'];
                ?>
                  <div class="item">
                    <div class="probootstrap-program">
                      <a href="#"><img src="<?php echo $post_img_url;?>" alt="<?php echo $post_title;?>" class="img-responsive img-rounded"></a>
                      <h3><?php echo $post_title;?></h3>
                      <p>$<?php echo $post_price;?></p>
                      <p><?php echo $post_description;?></p>
                    </div>
                  </div>
                <?php
                  }
                ?>  
              </div>
            </div>
          </div>
        </div>
      </div> 
  </section>
</main>
<?php require 'footer.php';?>
</body>
</html> 
