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
	// insert into database
	// try{
	// 	$query2 = 'INSERT INTO customer (email, password) VALUES (:email, :password)';
	// $statement = $db->prepare($query2);
	// $statement->bindValue(':email', $email);
	// $statement->bindValue(':password', $password);
	// $customerId = $db->lastInsertId("customer_id_seq");
	// }catch (Exception $ex)
	// {
	// 	echo "Error with DB. Details: $ex";
	// 	die();
	// }

	$query2 = 'INSERT INTO customer (email, password) VALUES (:email, :password) RETURNING id' ;
	$statement = $db->prepare($query2);
	$statement->bindValue(':email', $email);
	$statement->bindValue(':password', $password);
	$customerId = $db->lastInsertId("customer_id_seq");
	echo $customerId;
	$query = 'INSERT INTO trainer (customer_id, first_name, last_name, speciality) VALUES (customer_id, :first, :last, :speciality)';
	$statement = $db->prepare($query);
	$statement->bindValue(':cusomer_id', $customerId);
	$statement->bindValue(':first', $first);
	$statement->bindValue(':last', $last);
	$statement->bindValue(':speciality', $speciality);

	$statement->execute();
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
