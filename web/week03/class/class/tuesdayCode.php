<h1>PHP Team Activity</h1>
<?php for ($i = 0; $i < 10; $i++) { ?>
   <div id="<?php echo $i; ?>" class="numberedDivs" <?php if($i % 2 == 0){echo "style='color:red'";} ?>>This is div #<?php echo $i; ?></div>
<?php } ?>