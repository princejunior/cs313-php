<?php
	session_start();

// retrieve POST data from the other page
$email = $_POST['email'];
$password1 = $_POST['password'];
require("dbConnect.php");
$db = get_db();

try
{
    $statement = $db->prepare("SELECT * FROM customer WHERE email = $email");
    $statement->execute();
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
        $userId = $row['id'];
        $password2 = $row['password'];
        $customer_type = $row['customer_type'];
    }
    if($password1 != $password2){
        echo "Password does not match!";
    } else {
        if($customer_type == 'trainer'){
            $_SESSION['customer_type'] = $customer_type;
            header("Location: editTrainerProfilePage.php/?id=$userId");
            die(); 
        } else {
            $_SESSION['customer_type'] = $customer_type;
            header("Location: editClientProfilePage.php/?id=$userId");
            die(); 
        }  
    }
}
catch (Exception $ex)
{
    echo "Error with DB. Details: $ex";
    echo "email is not found";
	die();
}
// header("Location: trainerProfilePage.php/?id=$userId");
die(); 
?>
