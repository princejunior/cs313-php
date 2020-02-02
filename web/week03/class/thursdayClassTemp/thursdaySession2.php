<?php 
   // start session
   session_start();
   // save session variables into local variables
   $c = $_SESSION["favColor"];
   $a = $_SESSION["favAnimal"];
?>
// use the session variables 

<h1>Your favorite color is <?=$c?>and you favorite animal is <?=$a?></h1>
<h3>Again, just for kick</h3>
<?php 
   if(isset($_SESSION['pictureUrl'])){?>
   <h3>Again, just for kick....from a form</h3>
   <img src="<?=$_SESSION['pictureUrl'] ?>"

   <?php } ?>