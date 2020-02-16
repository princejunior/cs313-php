<?php
    $about_me_1 = $_POST['about_me'];
    $my_mission_1 = $_POST['my_mission'];
    $my_vision_1 = $_POST['my_vision'];
    $customer_id = $_SESSION['id'];
    try{
    $statement = $db->prepare("SELECT * FROM trainer_description WHERE trainer_id = (Select id FROM trainer WHERE customer_id = $customer_id)");
    $statement->execute();
    while ($row = $statement->fetch(PDO::FETCH_ASSOC))
    {
        $trainer_id = $row['trainer_id'];
        $about_me_2 = $row['about_me'];
        $my_mission_2 = $row['my_mission'];
        $my_vision_2 = $row['my_vision'];
    }
    if ($about_me_1 != $about_me_2){
        $query1 = 'UPDATE trainer_description SET about_me= \'$about_me_1\' WHERE trainer_id = \'$trainer_id\'';
        $update = $db->prepare($query1);
        $update->execute();
    } 
    if ($my_mission_1 != $my_mission_2){
        $query2 = 'UPDATE trainer_description SET my_mission=\'$my_mission_1\'  WHERE trainer_id = $trainer_id';
        $update = $db->prepare($query2);
        $update->execute();
    }
    if ($my_vision_1 != $my_vision_2){
        $query3 = 'UPDATE trainer_description SET my_vision=\'my_vision_1\'  WHERE trainer_id = $trainer_id';
        $update = $db->prepare($query3);
        $update->execute();
    }
} catch (Exception $ex)
{
    echo "Error with DB. Details: $ex";
	die();
}
    header("Location: ../trainerProfilePage.php/?id=$customer_id");
die();
?>