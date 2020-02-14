<?php
	session_start();
// retrieve POST data from the other page
$email = htmlspecialchars($_POST['email']);
$password1 = htmlspecialchars($_POST['password']);
require("dbConnect.php");
$db = get_db();

try
{
    $statement = $db->prepare("SELECT * FROM customer WHERE email = '$email'");
    $statement->execute();
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
        $userId = $row['id'];
        $password2 = $row['password'];
        $customer_type = $row['customer_type'];
    }
    if($password1 != $password2){
        echo "Password does not match!";
        die(); 
    } else {
        if($customer_type == 'trainer'){
            $_SESSION['customer_type'] = $customer_type;
            header("Location: editTrainerProfile.php/?id=$userId");
            die(); 
        } else {
            $_SESSION['customer_type'] = $customer_type;
            header("Location: editClientProfile.php/?id=$userId");
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
