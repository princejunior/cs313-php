<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Reciving Form Demo</title>
    </head>
    <?php
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $major = htmlspecialchars($_POST["major"]);
        $comments = htmlspecialchars($_POST["comments"]);
        $continents = htmlspecialchars($_POST["continents[]"]);
    ?>
    <body>
        <div> 
            <h1>Your username is <?php echo $name;?></h1>
            <a href=<?="mailto:$email"?>><?=$email?></a>
            <p>Your Major is: <?php echo $major;?></p>
            <p>Comments: <?php echo $comments;?></p>
            <p>You have visited the following continents: 
                <?php foreach($_POST["continents"] as $selected){
             echo $selected . "<br>";}?></p>
        </div>
    </body>
</html>