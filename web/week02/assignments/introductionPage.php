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
        Home is in Illinois and I do not miss the place. I have about 
        three semesters and an internship before I graduate. I enjoy the 
        out doors only when its warm outside. This cold winter has been 
        keeping me indoors unless snowboarding is involved. In the picture 
        on the left is my brother and on the right is my girlfriend who 
        I've been dating for 15 months. ";
        $hobbies = "I enjoy spending my time playing video games, 
        reading, watching Netflix, working out, and adventures. Two of my 
        favorite video games are 2K Basketball and Call of Duty. For me to 
        be good at these games require me to play consecutivley for hours 
        if I haven't played in awhile. I am currently reading Book for Dummy 
        on Electronics and the life of Elon Musk. Elon Musk's life is very 
        extrodinary! Currently I watching 'Night Shift' and it is okay. 
        I try to workout everyday. I love to go on a hike or bridge jump 
        at Fun Farm Bridge."
?>    
<div class="jumbotron text-center">
  <h1><?php echo $name;?></h1>
  <p><?php echo $family;?></p> 
  <p> 
     <a href="homePage.html">Go to Home Page</a>
  </p>
</div>
  
<div class="container" style="font-size: 24px">
  <div class="row">
    <div class="col-sm-4">
      <h3>About Me</h3>
      <p style="font-size:"><?php echo $aboutME;?></p>
     </div>
    <div class="col-sm-4">
        <div class="thumbnail">
            <a href="introductionPage.php" target="_blank">
                <img class="img-thumbnail" src="photo/IMG_5690.jpeg" 
                alt="Family" style="max-width:100%">
            </a>
        </div>
    </div>
    <div class="col-sm-4">
      <h3>Hobbies</h3>        
      <p><?php echo $hobbies;?></p>
      
    </div>
  </div>

    

        
   
</body>
</html>