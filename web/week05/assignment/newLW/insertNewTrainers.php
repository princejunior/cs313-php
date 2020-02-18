<?php
	session_start();
// retrieve POST data from the other page
$first = $_POST['first_name'];
$last = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$speciality = $_POST['speciality'];
$customer_type = 'trainer';
$profile_img_url = 'https://polar-waters-71288.herokuapp.com/week05/assignment/newLW/photos_LW/defaultImg.png';
require("dbConnect.php");
$db = get_db();
try
{
	$query1 = 'INSERT INTO customer (email, password, customer_type) VALUES (:email, :password, :customer_type)' ;
	$statement1 = $db->prepare($query1);
	$statement1->bindValue(':email', $email);
	$statement1->bindValue(':password', $password);
	$statement1->bindValue(':customer_type', $customer_type);
	$statement1->execute();
	$customer_id = $db->lastInsertId("customer_id_seq");
	$_SESSION['customer_id'];
	echo $customerId;
	$query2 = 'INSERT INTO trainer (customer_id, first_name, last_name, speciality,profile_img_url) VALUES (:customer_id, :first, :last, :speciality, :profile_img_url)';
	$statement2 = $db->prepare($query2);
	$statement2->bindValue(':customer_id', $customer_id);
	$statement2->bindValue(':first', $first);
	$statement2->bindValue(':last', $last);
	$statement2->bindValue(':speciality', $speciality);
	$statement2->bindValue(':profile_img_url', $profile_img_url);
	$statement2->execute();
	$query3 = 'INSERT INTO client (customer_id, first_name, last_name, profile_img_url) VALUES (:customer_id, :first, :last, :profile_img_url)';
	$statement3 = $db->prepare($query3);
	$statement3->bindValue(':customer_id', $customer_id);
	$statement3->bindValue(':first', $first);
	$statement3->bindValue(':last', $last);
	$statement3->bindValue(':profile_img_url', $profile_img_url);
	$statement3->execute();
	// SELECT c.relname FROM pg_class c WHERE c.relkind = 'S';   -- display all sequences
	// get id of last inserted row - save in $userId
	// $_SESSION['customer_id'] = $customerId;
	$_SESSION['customer_type'] = $customer_type;	
	// $userId = $db->lastInsertId("trainer_id_seq");
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: insertTrainerInfo.php/?customer_id=$customer_id");

die(); 
?>
