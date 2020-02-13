<?php
// retrieve POST data from the other page
$first = $_POST['firstName'];
$last = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];
require("dbConnect.php");
$db = get_db();

try
{
	// insert into database
	$query = 'INSERT INTO customer (first_name, last_name, email) VALUES (:first, :last, :email)';
	$statement = $db->prepare($query);
	$statement->bindValue(':first', $first);
	$statement->bindValue(':last', $last);
	$statement->bindValue(':email', $email);
	$statement->execute();
	// SELECT c.relname FROM pg_class c WHERE c.relkind = 'S';   -- display all sequences
    
    // get id of last inserted row - save in $userId
	$userId = $db->lastInsertId("w6_user_id_seq");
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: display.php/?personId=$userId");

die(); 
?>
