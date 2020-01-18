<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Found in https://www.w3schools.com/bootstrap/bootstrap_get_started.asp -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
<body>
<?php
        $name= "Elijah Elliott's Page";
        $family = " I am one of four childeren being the second youngest.";
        $aboutME ="I am studying in Software Engineer. 
        Home is in Illinois and I do not miss the place. ";
        $image = "<img src='/photo/IMG_5690.jpeg'";
?>    
<div class="jumbotron text-center">
  <h1><?php echo $name;?></h1>
  <p><?php echo $family;?></p> 
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>About Me</h3>
      <p><?php echo $aboutME;?></p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>


    <div> 
    <a href="homePage.html">Go to Home Page</a>;
        
    </div>
</body>
</html>