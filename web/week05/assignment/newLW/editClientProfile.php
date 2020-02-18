<?php 
    session_start();
    require "dbConnect.php";
    $db = get_db();
    $trainerData = NULL;
?>
<!DOCTYPE html>
<html lang="en">
<?php require 'head.php';?>
<body>
<?php require 'navBarLW.php';?>
<?php
    $id = $_GET['customer_id'];
    $statement1 = $db->prepare("SELECT * FROM client WHERE customer_id = $id");
    $statement1->execute();
    while ($row1 = $statement->fetch(PDO::FETCH_ASSOC))
    {
        $client_id = $row1['id'];
        $first_name = $row1['first_name'];
        $last_name = $row1['last_name'];
        $profile_img_url = $row1['profile_img_url'];
    }
    $statement2 = $db->prepare("SELECT * FROM client_description WHERE client_id = $client_id");
    $statement2->execute();
    while ($row2 = $statement->fetch(PDO::FETCH_ASSOC))
    {
        $about_me = $row2['about_me'];
        $my_goals = $row2['my_goals'];
        $my_vision = $row2['my_vision'];
    }
?>
  <!-- Accessed from trainer id -->
<form action="../saveClientChanges.php/?id=<?php echo $id;?>" method="post"> 
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
                    <textarea  class="inputVision" value="<?php echo $about_me;?>" rows="4" cols="50"></textarea>
                </div>
            </div>
            <div class="row probootstrap-gutter60">
                <div class="col-md-4 mb30">
                    <h4 class="mb30">My Goals</h4>
                    <textarea  class="inputVision" name="my_goals" value="<?php echo $my_goals;?>" rows="4" cols="50"></textarea>
                </div>
                <div class="col-md-4 mb30">
                    <h4 class="mb30">My Vision</h4>
                    <textarea  class="inputVision" name="my_vision"  rows="4" cols="50"><?php echo $my_vision;?></textarea>
                </div>
            </div>
        </div>
    </section>
</form>
</main>
  <?php require 'footer.php';?>
</body>
</html>