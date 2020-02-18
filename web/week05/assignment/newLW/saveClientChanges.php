<?php
    $about_me_1 = $_POST['about_me'];
    $my_goals_1 = $_POST['my_goals'];
    $my_vision_1 = $_POST['my_vision'];
    $customer_id = $_SESSION['id'];
    try{
    $statement = $db->prepare("SELECT * FROM client_description WHERE client_id = 
    (Select id FROM client WHERE customer_id = $customer_id)");
    $statement->execute();
    while ($row = $statement->fetch(PDO::FETCH_ASSOC))
    {
        $client_id = $row['client_id'];
        $about_me_2 = $row['about_me'];
        $my_mission_2 = $row['my_mission'];
        $my_vision_2 = $row['my_vision'];
    }
    if ($about_me_1 != $about_me_2){
        $query1 = "UPDATE client_description SET about_me='$about_me_1'  WHERE client_id = $client_id";
        $update1 = $db->prepare($query1);
	    // $update1->bindValue(':email', $email);
        $update1->execute();
    } 
    if ($my_mission_1 != $my_mission_2){
        $query2 = 'UPDATE client_description SET my_goals=$my_goals_1  WHERE client_id = $client_id';
        $update2 = $db->prepare($query2);
        $update2->execute();
    }
    if ($my_vision_1 != $my_vision_2){
        $query3 = 'UPDATE client_description SET my_vision=my_vision_1  WHERE client_id = $client_id';
        $update3 = $db->prepare($query3);
        $update3->execute();
    }
} catch (Exception $ex)
{
    echo "Error with DB. Details: $ex";
	die();
}
    header("Location: trainerProfilePage.php/?id=$customer_id");
    die();
?>