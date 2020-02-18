<?php 
    session_start();
    require "dbConnect.php";
    $db = get_db();
    $trainerData = NULL;
    $customer_id = $_GET['customer_id'];
?>
<!DOCTYPE html>
<html lang="en">
<?php require 'head.php';?>
<body>
<?php require 'navBarLW.php';?>

<?php
    echo $customer_id;
    $statement1 = $db->prepare("SELECT * FROM trainer WHERE customer_id = $customer_id");
    $statement1->execute();
    while ($row1 = $statement1->fetch(PDO::FETCH_ASSOC))
    {
      $first_name = $row1['first_name'];
      $last_name = $row1['last_name'];
      $profile_img_url = $row1['profile_img_url'];
      $speciality = $row1['speciality'];
    }
?>
  <!-- Accessed from trainer id -->
<form action="../insertNewTrainerInfo.php/?customer_id=<?php echo $customer_id;?>" method="post"> 
<section class="probootstrap-intro probootstrap-intro-inner" style="background-image: url(&quot;<?php echo $profile_img_url;?>&quot;); background-position: 0px 0px;" data-stellar-background-ratio="0.5"> 
  <div class="container">
      <div class="row">
        <div class="col-md-7 probootstrap-intro-text">
          <h1 class="probootstrap-animate fadeIn probootstrap-animated" data-animate-effect="fadeIn">
            <span><?php echo $first_name;?></span> 
            <?php echo $last_name;?>
          </h1>
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
            <input type="submit" class="probootstrap-owl-navigation absolute right"><span class="glyphicon glyphicon-edit" aria-hidden="true">Save Changes</span>
            <div class="row probootstrap-gutter60 mb50">
                <div class="col-md-6">
                    <figure><img src="<?php echo $profile_img_url;?>" lt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                </div>
                <div class="col-md-6">
                    <h2 class="probootstrap-heading">About Me</h2>
                    <textarea  class="inputVision" name="about_me"rows="4" cols="50"></textarea>
                </div>
            </div>
            <div class="row probootstrap-gutter60">
                <div class="col-md-4 mb30">
                    <h4 class="mb30">My Mission</h4>
                    <textarea  class="inputVision" name="my_mission" rows="4" cols="50"></textarea>
                    </div>
                <div class="col-md-4 mb30">
                    <h4 class="mb30">Upcoming Events</h4>
                    <!-- <ul class="probootstrap-blog-list">
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
                    </ul> -->
                </div>
                <div class="col-md-4 mb30">
                    <h4 class="mb30">My Vision</h4>
                    <textarea  class="inputVision" name="my_vision" rows="4" cols="50"></textarea>
                </div>
            </div>
        </div>
    </section>
    <section id="next-section" class="probootstrap-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 probootstrap-relative">
            <div>
              <h2 class="probootstrap-heading mt0 mb50">Programs (For Beginners)</h2>
              <a href='editTrainerProfile.php/?id=<?php echo $id?>' class="probootstrap-heading absolute right"><button><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>Add Programs</button></a>            
            </div>  
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
                    </div> 
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
</form>
</main>
  <?php require 'footer.php';?>
</body>
</html>