<?php
try
{
  $dbUrl = getenv('DATABASE_URL');

  $dbOpts = parse_url($dbUrl);

  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbBook = $dbOpts["book"];
  $dbChapter = $dbOpts["chapter"];
  $dbVerse = $dbOpts["verse"];
  $dbContent = $dbOpts["content"];

  $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbBook, $dbChapter, $dbVerse, $dbContent);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}
foreach ($db->query('SELECT book, chapter, verse, content FROM scripture') as $row)
{
  echo 'Book: ' . $row['book'];
  echo 'Chapter: ' . $row['chapter'];
  echo 'Verse: ' . $row['verse'];
  echo 'Content: ' . $row['content'];
  echo '<br/>';
}
?>