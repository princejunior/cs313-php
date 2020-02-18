<?php
	session_start();
// retrieve POST data from the other page
$first = $_POST['first_name'];
$last = $_POST['last_name'];
$about_me = $_POST['about_me'];
$my_mission = $_POST['my_mission'];
$my_vision = $_POST['my_vision'];
require("dbConnect.php");
$db = get_db();
try
{
	$query1 = 'INSERT INTO trainer_desscription (trainer_id, about_me, my_mission, my_vision) VALUES (:trainer_id, :about_me, :my_mission, :my_vision)' ;
    $statement1 = $db->prepare($query1);
	$statement1->bindValue(':trainer', $_SESSION['trainer_id']);    
	$statement1->bindValue(':about_me', $about_me);
	$statement1->bindValue(':my_mission', $my_mission);
	$statement1->bindValue(':my_vision', $my_vision);
	$statement1->execute();
	$customerId = $_SESSION['customerId'];
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: trainerProfilePage.php/?customer_id=$customerId");

die(); 
?>
