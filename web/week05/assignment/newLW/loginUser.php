<?php
	session_start();
// retrieve POST data from the other page
$email = htmlspecialchars($_POST['email']);
$password1 = htmlspecialchars($_POST['password']);
require("dbConnect.php");
$db = get_db();

try
{
    $statement1 = $db->prepare("SELECT * FROM customer WHERE email = '$email'");
    $statement1->execute();
    while ($row1 = $statement1->fetch(PDO::FETCH_ASSOC)){
        $customer_id = $row1['id'];
        $password2 = $row1['password'];
        $customer_type = $row1['customer_type'];
        $_SESSION['customer_type'] = $customer_type;
    }
    

    if($password1 != $password2){
        echo "Password does not match!";
        die(); 
    } else {
        if($customer_type == 'trainer'){
            $statement2 = $db->prepare("SELECT id FROM trainer WHERE customer_id = $customer_id");
            $statement2->execute();
            while ($row2 = $statement2->fetch(PDO::FETCH_ASSOC)){
            $trainer_id = $row2['id'];
            }
            header("Location: trainerProfilePage.php/?id=$trainer_id");
            die(); 
        } else {
            $_SESSION['customer_type'] = $customer_type;
            $statement3 = $db->prepare("SELECT id FROM client WHERE customer_id = $customer_id");
            $statement3->execute();
            while ($row3 = $statement3->fetch(PDO::FETCH_ASSOC)){
                $client_id = $row3['id'];
             }
            header("Location: clientProfilePage.php/?id=$client_id");
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
