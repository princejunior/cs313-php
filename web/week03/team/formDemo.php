<?php $major= array("Computer Science", "Web Design and Development", 
    "Computer Information Technology", "Computer Engineering");
    ?>
    <form method="POST" action="recieveFormDemo.php">
            Name:<input type="text" name="name"><br>
            Email:<input type="text" name="email"><br>
            Major:
            <?php 
                foreach($major as $selected) {
                    echo "<input type='radio' name='major' value='" . $selected. "'>" .$selected;
                }
            ?>
            Comments:<input type="text" name="comments"><br>
            Which continents have you been too? <br>
            <input type="checkbox" name="continents[]" value="North America">North America
            <input type="checkbox" name="continents[]" value="South America">South America
            <input type="checkbox" name="continents[]" value="Europe">Europe
            <input type="checkbox" name="continents[]" value="Asia">Asia
            <input type="checkbox" name="continents[]" value="Australia">Australia
            <input type="checkbox" name="continents[]" value="Africa">Africa
            <input type="checkbox" name="continents[]" value="Antarctica">Antarctica
            <input type="submit">
        </form>