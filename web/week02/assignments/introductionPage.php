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
      <button type="button" class="btn" href="homePage.html">Go Back</button>
     <a href="homePage.html">Go to Home Page</a>;
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
        <div class="thumbnail">
            <a href="introductionPage.php" target="_blank">
                <img class="img-thumbnail" src="<?php echo $image;?>" 
                alt="Family" style="max-width:100%">
            </a>
        </div>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>
<script>
    function changeInfo(value){
        if(value == "me"){
            document.getElementByID("aboutME").style.visibility = visible;
            document.getElementByID("education").style.visibility = hidden;
            document.getElementByID("goals").style.visibility = hidden;
        }
        else if(value == "education"){
            document.getElementByID("aboutME").style.visibility = hidden;
            document.getElementByID("education").style.visibility = visible;
            document.getElementByID("goals").style.visibility = hidden;
        }
        else if(value == "goals"){
            document.getElementByID("aboutME").style.visibility = hidden;
            document.getElementByID("education").style.visibility = hidden;
            document.getElementByID("goals").style.visibility = visible;
        }
    } 
</script>

<div class="container">
<div class="btn-group">
  <button type="button" class="btn btn-primary" 
  onclick="changeInfo(this)" value="me">About Me </button>
  <button type="button" class="btn btn-primary" 
  onclick="changeInfo(this)" value="education">Education</button>
  <button type="button" class="btn btn-primary" 
  onclick="changeInfo(this)" value="goals">Goals</button>
</div>
  <div class="row">
    <div class="col-sm-4" id="aboutMe">
      <h3>About Me</h3>
      <p><?php echo $aboutME;?></p>
      <button type="button" class="btn" href="homePage.html">Go Back</button>
     <a href="homePage.html">Go to Home Page</a>;
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4" id="education">
        <div class="thumbnail">
            <a href="introductionPage.php" target="_blank">
                <img class="img-thumbnail" src="<?php echo $image;?>" 
                alt="Family" style="max-width:100%">
            </a>
        </div>
    </div>
    <div class="col-sm-4" id="goals">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>

        
   
</body>
</html>