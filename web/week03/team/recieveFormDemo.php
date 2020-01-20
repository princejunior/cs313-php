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
    ?>
    <body>
        <div> 
            <h1><?php echo $name;?></h1><br>
            <p> <?php echo $email;?></p>
            <p> <?php echo $major;?></p>
            <p> <?php echo $comments;?></p>
        </div>
    </body>
</html>