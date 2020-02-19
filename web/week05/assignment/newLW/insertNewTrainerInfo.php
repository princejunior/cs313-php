<?php
	session_start();
	require("dbConnect.php");
	$db = get_db();
	$about_me = htmlspecialchars($_POST["about_me"]);
	$my_mission = htmlspecialchars($_POST['my_mission']);
	$my_vision = htmlspecialchars($_POST['my_vision']);
	$customer_id = htmlspecialchars($_GET['customer_id']);
	echo $customer_id;
try
{
    $statement = $db->prepare("SELECT id FROM trainer WHERE customer_id = $customer_id");
    $statement->execute();
    while ($row = $statement->fetch(PDO::FETCH_ASSOC))
    {
        $trainer_id = $row['id'];
    }
	$query1 = 'INSERT INTO trainer_description (trainer_id, about_me, my_mission, my_vision) VALUES (:trainer_id, :about_me, :my_mission, :my_vision)' ;
    $statement1 = $db->prepare($query1);
	$statement1->bindValue(':trainer_id', $trainer_id);    
	$statement1->bindValue(':about_me', $about_me);
	$statement1->bindValue(':my_mission', $my_mission);
	$statement1->bindValue(':my_vision', $my_vision);
	$statement1->execute();
	
}
catch (Exception $ex)
{
	echo 'dfgljadshfjklasdjklf';
	echo $_GET['customer_id'];
	echo $_SESSION['customer_id'];
	echo $customer_id;
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: trainerProfilePage.php/?customer_id=$customer_id");

die(); 
?>
