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
            <h1><?php echo $name;?></h1>
            <p><?php echo $email;?></p>
            <p><?php echo $major;?></p>
            <p><?php echo $comments;?></p>
            <p><?php foreach($_POST["continents"] as $selected){
             echo $selected;}?></p>
        </div>
    </body>
</html>