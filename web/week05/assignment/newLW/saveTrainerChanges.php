<?php
    session_start();
    require "dbConnect.php";
    $db = get_db();
    $about_me_1 = htmlspecialchars($_POST["about_me"]);
	$my_mission_1 = htmlspecialchars($_POST['my_mission']);
	$my_vision_1 = htmlspecialchars($_POST['my_vision']);
	$customer_id = htmlspecialchars($_GET['customer_id']);
    try{
        $statement = $db->prepare("SELECT * FROM trainer_description WHERE trainer_id = 
            (Select id FROM trainer WHERE customer_id = $customer_id)");
        $statement->execute();
        while ($row = $statement->fetch(PDO::FETCH_ASSOC))
        {
            $trainer_id = $row['trainer_id'];
            $about_me_2 = $row['about_me'];
            $my_mission_2 = $row['my_mission'];
            $my_vision_2 = $row['my_vision'];
        }
        $query1 = "UPDATE trainer_description SET about_me='$about_me_1', my_mission='$my_mission_1', my_vision='$my_vision_1' WHERE client_id = $trainer_id";
        $update1 = $db->prepare($query1);
	    // $update1->bindValue(':email', $email);
        $update1->execute();
    
    // if ($about_me_1 != $about_me_2){
    //     $query1 = "UPDATE trainer_description SET about_me='$about_me_1'  WHERE client_id = $trainer_id";
    //     // $query1 = 'UPDATE trainer_description SET about_me=$about_me_1  WHERE trainer_id = $trainer_id';
    //     $update1 = $db->prepare($query1);
	//     $update1->bindValue(':email', $email);
    //     $update1->execute();
    // } 
    // if ($my_mission_1 != $my_mission_2){
    //     $query2 = 'UPDATE trainer_description SET my_mission=$my_mission_1  WHERE trainer_id = $trainer_id';
    //     $update2 = $db->prepare($query2);
    //     $update2->execute();
    // }
    // if ($my_vision_1 != $my_vision_2){
    //     $query3 = 'UPDATE trainer_description SET my_vision=my_vision_1  WHERE trainer_id = $trainer_id';
    //     $update3 = $db->prepare($query3);
    //     $update3->execute();
    // }
} catch (Exception $ex)
{
    echo "Error with DB. Details: $ex";
	die();
}
    header("Location: ../trainerProfilePage.php/?customer_id=$customer_id");
    die();
?>