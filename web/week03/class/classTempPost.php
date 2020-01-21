<?php
//retruves POST data 
$email = htmlspecialchars($_POST["emailFprPHP"]);
$password = htmlspecialchars($_POST["passwordForPHP"]);
    echo "Your email is " . $email . ", and your password is " . $password;
?>