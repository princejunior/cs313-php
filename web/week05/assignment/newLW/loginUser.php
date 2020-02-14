<?php
// retrieve POST data from the other page
$email = $_POST['email'];
$password1 = $_POST['password'];
require("dbConnect.php");
$db = get_db();

try
{
    $statement = $db->prepare("SELECT id, password FROM customer WHERE email = $email");
    $statement->execute();
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
        $id = $row['id'];
        $password2 = $row['password'];
    }
    if($password1 != $password2){
        echo "Password does not match!";
    } else {
        $statement = $db->prepare("SELECT id FROM trainer");    
    }
}
catch (Exception $ex)
{
    echo "Error with DB. Details: $ex";
    echo "email is not found";
	die();
}
header("Location: trainerProfilePage.php/?id=$userId");

die(); 
?>
