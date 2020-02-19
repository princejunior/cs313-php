<?php 
    session_start();
    require "dbConnect.php";
    $db = get_db();
    $customer_id = $_GET['customer_id'];
?>
<!DOCTYPE html>
<html lang="en">
<?php require 'head.php';?>
<body>
<?php require 'navBarLW.php';?>

<?php
    // echo $customer_id;
    $statement1 = $db->prepare("SELECT * FROM client WHERE customer_id = $customer_id");
    $statement1->execute();
    while ($row1 = $statement1->fetch(PDO::FETCH_ASSOC))
    {
        $first_name = $row1['first_name'];
        $last_name = $row1['last_name'];
        $profile_img_url = $row1['profile_img_url'];
    }
    
?>
  <!-- Accessed from trainer id -->
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
<form action="../insertNewClientInfo.php/?customer_id=<?php echo $customer_id;?>" method="POST"> 
    <section id="next-section" class="probootstrap-section">
        <div class="container">
            <button type="submit" name="Submit" class="probootstrap-owl-navigation absolute right"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Save Changes</button>
            <div class="row probootstrap-gutter60 mb50">
                <div class="col-md-6">
                    <figure><img src="<?php echo $profile_img_url;?>" lt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                </div>
                <div class="col-md-6">
                    <h2 class="probootstrap-heading">About Me</h2>
                    <textarea  class="inputVision" value="about_me" name="about_me"rows="4" cols="50"></textarea>
                </div>
            </div>
            <div class="row probootstrap-gutter60">
                <div class="col-md-4 mb30">
                    <h4 class="mb30">My Goals</h4>
                    <textarea  class="inputVision" value="my_goals" name="my_goals" rows="4" cols="50"></textarea>
                    </div>
                <div class="col-md-4 mb30">
                    <h4 class="mb30">My Vision</h4>
                    <textarea  class="inputVision" value="my_vision" name="my_vision" rows="4" cols="50"></textarea>
                </div>
            </div>
        </div>
    </section>
    </form>
    <?php 
        if (isset($_POST['Submit'])) {
            $_POST['about_me'];
            $_POST['my_goals'];
            $_POST['my_vision'];
        }
    ?>
</main>
  <?php require 'footer.php';?>
</body>
</html>