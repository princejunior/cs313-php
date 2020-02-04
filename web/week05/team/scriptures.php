<?php
  require "dbConnect.php";
  $db = get_db();

  $scripture = $db->prepare("SELECT * FROM scriptures");
  $scripture->execute();
  echo "<h1>Scripture Resources</h1>";
  while($sRow = $scripture->fetch(PDO::FETCH_ASSOC)) {
    $book = $sRow["book"];
    $chapter = $sRow["chapter"];
    $verse = $sRow["verse"];
    $content = $sRow["content"];
    echo "<p>$book $chapter:$verse - \"$content\"</p>";
  }

  
?>