<?php
   // Start the session
   session_start();

?>
<!DOCTYPE html>
<html>
   <body>
      <?php
         // remove previous session variable when going from session1 to sess2 to sess1 to sess2
         unset($_SESSION['pictureUrl']);
         // Set session variables
         $_SESSION["favColor"] = "green";
         $_SESSION["favAnimal"] = "monkey";
         // echo that variables have been set
         echo "Session variables have been set.";
?>
      <a href="thursdaySession2.php">Check the variables on another page</a>
      <h1>Just for kicks, using form</h1>
      <form action="" method="post">
         <input type="text" name="picture">
         <input type="submit" name="Submit" value="Submit!">
      </form>
      <?php // set session variables using a form 
         if(isset($_POST['Submit'])){
            $_SESSION['pictureUrl'] = $_POST['picture'];
         }
      ?>
   </body>
</html>