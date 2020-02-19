<!-- Starts session -->
<?php 
    session_start();
    require "dbConnect.php";
    $db = get_db();
    $trainerData = NULL;
?>
<!DOCTYPE html>
<html lang="en">
<?php require 'head.php'?>
<!-- <head>
  <title>Live W.O.W.</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" type="text/css" href="homePageStlye.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head> -->
<body>
<?php require 'navBarLW.php'?>
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
                    $first_name = $row['first_name'];
                    $last_name = $row['last_name'];
                    $profile_img_url = $row['profile_img_url'];
                    $speciality = $row['speciality'];
                    $trainer_id = $row['id']; 
                    $statement2 = $db->prepare("SELECT my_mission FROM trainer_description WHERE trainer_id = $trainer_id");
                    $statement2->execute();
                    while ($row2 = $statement2->fetch(PDO::FETCH_ASSOC)){
                            $my_mission = $row2['my_mission'];
                    }                        
                        ?>
                   
                    <div class="col-md-4" style="margin-bottom: 25px;" id=<?php echo "trainers[".$i."]"?>>
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" 
                                src=" <?php echo $profile_img_url;?> " data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                            <div class="card-body">
                                <h3 class="card-title"><?php echo $first_name . ' '. $last_name;?></h3>
                                <h5 class="card-title"><?php echo $speciality;?></h5>
                                <p class="card-text">
                                   <?php echo $my_mission;?>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    <?php 
                                        if ($customer_id != NULL) { ?>
                                            <a href='../profilePageLW.php?customer_id=<?php echo $customer_id?>&trainer_id=<?php echo $trainer_id;?>'><button class="btn btn-primary">View Profile</button></a>
                                    <?php
                                        } else { ?>
                                             <a href='profilePageLW.php?trainer_id=<?php echo $trainer_id;?>'><button class="btn btn-primary">View Profile</button></a>
                                    <?php
                                        }
                                    ?>
                                        <!-- <a href='../profilePageLW.php?customer_id=<?php echo $customer_id?>&trainer_id=<?php echo $trainer_id;?>'><button class="btn btn-primary" value="<?php echo $id?>">View Profile</button></a> -->
                                        <!-- <button class="btn btn-primary" value="<?php echo $id;?>">Add to Book</button> -->
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
<?php require 'footer.php';?>
</body>
</html>