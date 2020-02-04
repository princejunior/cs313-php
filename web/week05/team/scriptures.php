<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
  </head>
  <body>
    <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
<?php
  // require "dbConnect.php"; 
  // $db = get_db();

  // $scripture = $db->prepare("SELECT * FROM scriptures");
  // $scripture->execute();
  // echo "<h1>Scripture Resources</h1>";
  // while($sRow = $scripture->fetch(PDO::FETCH_ASSOC)) {
  //   $book = $sRow["book"];
  //   $chapter = $sRow["chapter"];
  //   $verse = $sRow["verse"];
  //   $content = $sRow["content"];
  //   echo "<p>$book $chapter:$verse - \"$content\"</p>";
  // }
?>
<?php 
  require "dbConnect.php";
  $db = get_db();?>

  <form action="scriptures.php" method="post">
    <input type="text" name="scripture_book"/>
    <input type="submit" name="Submit" value="Submit"/>
  </form>

 <?php
    if(isset($_POST["Submit"])) {
      echo "Submit is set";
      $book = $_POST["scripture_book"];
      $scripture = $db->prepare("SELECT * FROM scriptures WHERE book = $book");
      $scripture->execute();
      echo "<h1>Scripture Resources</h1>";
      while($sRow = $scripture->fetch(PDO::FETCH_ASSOC)) {
        $chapter = $sRow["chapter"];
        $verse = $sRow["verse"];
        $content = $sRow["content"];
        echo "<p>$book $chapter:$verse - \"$content\"</p>";
        }
    }
    else {
      echo "Not submitted yet ;(";
    }
 ?> 
  </body>
</html>