<?php
    $about_me_1 = $_POST['about_me'];
    $my_mission_1 = $_POST['my_mission'];
    $my_vision_1 = $_POST['my_vision'];
    $customer_id = $_SESSION['id'];
    $statement = $db->prepare("SELECT * FROM trainer_description WHERE trainer_id = 
    (Select id FROM trainer WHERE customer_id = $customer_id");
    $statement->execute();
    while ($row = $statement->fetch(PDO::FETCH_ASSOC))
    {
        $trainer_id = $row['trainer_id'];
        $about_me_2 = $row['about_me'];
        $my_mission_2 = $row['my_mission'];
        $my_vision_2 = $row['my_vision'];
    }
    if ($about_me_1 != $about_me_2){
        $delete = $db->prepare("DELETE about_me FROM trainer_description WHERE trainer_id = $trainer_id");
        $delete->execute();
        $save = $db->prepare("INSERT INTO trainer_description(about_me) VALUES ($about_me_1)");
        $save->execute();
    } 
    if ($my_mission_1 != $my_mission_2){
        $delete = $db->prepare("DELETE my_mission FROM trainer_description WHERE trainer_id = $trainer_id");
        $delete->execute();
        $save = $db->prepare("INSERT INTO trainer_description(my_mission) VALUES ($my_mission_1)");
        $save->execute();
    }
    if ($my_vision_1 != $my_vision_2){
        $delete = $db->prepare("DELETE my_vision FROM trainer_description WHERE trainer_id = $trainer_id");
        $delete->execute();
        $save = $db->prepare("INSERT INTO trainer_description(my_vision) VALUES ($my_vision_1)");
        $save->execute();
    }
    header("Location: ../trainerProfilePage.php/?id=$customer_id");
die();
?>