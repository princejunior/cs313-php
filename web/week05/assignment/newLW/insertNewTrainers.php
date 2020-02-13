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
	$query = 'INSERT INTO trainer (first_name, last_name, email, speciality) VALUES (:first, :last, :email, :speciality)';
	$statement = $db->prepare($query);
	$statement->bindValue(':first', $first);
	$statement->bindValue(':last', $last);
	$statement->bindValue(':email', $email);
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
