<?php
// retrieve POST data from the other page
$first = $_POST['firstName'];
$last = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];
$speciality = $_POST['speciality'];

require("dbConnect.php");
$db = get_db();

try
{
	$query1 = 'INSERT INTO customer (email, password) VALUES (:email, :password)' ;
	$statement1 = $db->prepare($query2);
	$statement1->bindValue(':email', $email);
	$statement1->bindValue(':password', $password);
	$statement1->execute();
	$customerId = $db->lastInsertId("customer_id_seq");
	
	echo $customerId;
	$query2 = 'INSERT INTO trainer (customer_id, first_name, last_name, speciality) VALUES (customer_id, :first, :last, :speciality)';
	$statement2 = $db->prepare($query2);
	$statement2->bindValue(':cusomer_id', $customerId);
	$statement2->bindValue(':first', $first);
	$statement2->bindValue(':last', $last);
	$statement2->bindValue(':speciality', $speciality);

	$statement2->execute();
	// SELECT c.relname FROM pg_class c WHERE c.relkind = 'S';   -- display all sequences
	// get id of last inserted row - save in $userId
	$userId = $db->lastInsertId("trainer_id_seq");
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: trainerProfilePage.php/?Id=$userId");

die(); 
?>
