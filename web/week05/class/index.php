<?php 
    require "dbConnect.php";
    $db = get_db();

    $family_members = $db->prepare("SELECT * FROM w5_family_members");
    $family_members->execute();

    while($fRow = $family_members->fetch(PDO::FETCH_ASSOC)){
        
    }
?>