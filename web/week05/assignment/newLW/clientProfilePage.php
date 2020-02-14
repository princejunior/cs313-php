<?php 
    session_start();
    require "dbConnect.php";
    $db = get_db();
    $id = $_SESSION['id'];
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
<?php require 'navBarLW.php'?>

<?php
    // $id = $_GET['id'];
    $statement = $db->prepare("SELECT * FROM trainer WHERE customer_id = $id");
    $statement->execute();
    // Go through each result
    while ($row = $statement->fetch(PDO::FETCH_ASSOC))
    {
      // The variable "row" now holds the complete record for that
      // row, and we can access the different values based on their
      // name
      $name = $row['name'];
      $profile_img_url = $row['profile_img_url'];
      $speciality = $row['speciality'];
    }
?>
<section class="probootstrap-intro probootstrap-intro-inner">
        <div class="container">
            <a href='editTrainerProfile.php?id=<?php echo $id?>' class="probootstrap-owl-navigation absolute right"><button><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Edit Profile</button></a>
            <div class="row probootstrap-gutter60 mb50">
                <div class="col-md-6">
                    <figure><img src="<?php echo $profile_img_url;?>" lt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                </div>
            </div>
            <div class="row probootstrap-gutter60">
                <div class="col-md-6">
                    <h2 class="probootstrap-heading">About Me</h2>
                    <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                </div>
            </div>
            <div class="row probootstrap-gutter60">
                <div class="col-md-4 mb30">
                    <h4 class="mb30">My Goals</h4>
                    <p>“Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.”</p>
                </div>
                <div class="col-md-4 mb30">
                    <h4 class="mb30">My Lifestyle</h4>
                    <p>“The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.”</p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>