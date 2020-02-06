<?php 
function get_db(){
       $db = NULL;
    try
{
    // access url by keyword 
  $dbUrl = getenv('DATABASE_URL');

  $dbOpts = parse_url($dbUrl);

  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}
return $db;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php 
    $db = get_db();
    $event_participnat_Data = NULL;
?>
<?php
    $statement = $db->prepare("SELECT * FROM w5_event");
    $statement->execute();
    // Go through each result
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
        // The variable "row" now holds the complete record for that
        // row, and we can access the different values based on their
        // name
        $name = $row['name'];
        $picture_img_url = $row['img'];
        $description = $row['description'];
        $id = $row['id'];?>
        
        <img src="<?php echo $profile_img_url;?>" style="height: 225px; width: 100%; display: block;">
        <p><?php echo $name ?>
        <?php 
    }
    ?>
    </body>
</html>