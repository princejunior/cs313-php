<?php
// retrieve POST data from the other page
$first = $_POST['first_name'];
$last = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$speciality = $_POST['speciality'];

require("dbConnect.php");
$db = get_db();

try
{
	$query1 = 'INSERT INTO customer (email, password) VALUES (:email, :password)' ;
	$statement1 = $db->prepare($query1);
	$statement1->bindValue(':email', $email);
	$statement1->bindValue(':password', $password);
	$statement1->execute();
	$customerId = $db->lastInsertId("customer_id_seq");
	echo $customerId;
	$query3 = 'INSERT INTO client (customer_id, first_name, last_name) VALUES (:customer_id, :first, :last)';
	$statement3 = $db->prepare($query3);
	$statement3->bindValue(':customer_id', $customerId);
	$statement3->bindValue(':first', $first);
	$statement3->bindValue(':last', $last);
	$statement3->execute();
	// SELECT c.relname FROM pg_class c WHERE c.relkind = 'S';   -- display all sequences
	// get id of last inserted row - save in $userId
	$userId = $db->lastInsertId("client_id_seq");
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: ../clientProfilePage.php/?id=$userId");

die(); 
?>
