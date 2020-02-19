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
    $statement = $db->prepare("SELECT id FROM client WHERE customer_id = $customer_id");
    $statement->execute();
    while ($row = $statement->fetch(PDO::FETCH_ASSOC))
    {
        $client_id = $row['id'];
    }
	$query1 = 'INSERT INTO client_description (client_id, about_me, my_mission, my_vision) VALUES (:client_id, :about_me, :my_mission, :my_vision)' ;
    $statement1 = $db->prepare($query1);
	$statement1->bindValue(':client_id', $client_id);    
	$statement1->bindValue(':about_me', $about_me);
	$statement1->bindValue(':my_mission', $my_mission);
	$statement1->bindValue(':my_vision', $my_vision);
	$statement1->execute();
	
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: ../clientProfilePage.php/?customer_id=$customer_id");

die(); 
?>
