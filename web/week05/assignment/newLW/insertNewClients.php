<?php
	session_start();
	// retrieve POST data from the other page
	$first = $_POST['first_name'];
	$last = $_POST['last_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$customer_type = 'client';
	require("dbConnect.php");
	$db = get_db();
	
	try {
	$query1 = 'INSERT INTO customer (email, password, customer_type) VALUES (:email, :password, :customer_type)' ;
	$statement1 = $db->prepare($query1);
	$statement1->bindValue(':email', $email);
	$statement1->bindValue(':password', $password);
	$statement1->bindValue(':customer_type', $customer_type);
	$statement1->execute();
	$customer_id = $db->lastInsertId("customer_id_seq");
	$_SESSION['customer_id'] = $customer_id;
	echo $customerId;
	$query2 = 'INSERT INTO client (customer_id, first_name, last_name) VALUES (:customer_id, :first, :last)';
	$statement2 = $db->prepare($query2);
	$statement2->bindValue(':customer_id', $customer_id);
	$statement2->bindValue(':first', $first);
	$statement2->bindValue(':last', $last);
	$statement2->execute();
	$_SESSION['customer_type'] = $customer_type;
	$userId = $db->lastInsertId("client_id_seq");
	// $_SESSION['id'] = $userId;
	// $_SESSION['customer_type'] = $customer_type;
	} catch (Exception $ex){
		echo "Error with DB. Details: $ex";
		die();
	}
	header("Location: insertClientInfo.php/?customer_id=$customer_id");
	die(); 
?>
