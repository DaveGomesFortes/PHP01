<?php
    include ('functions/bootstrap.php');
    bootstrap();
    $trigger = trigger();
    $i = css('css', 'css');
    ?>
<html lang="en">
    <head>
        <title>Trigger</title>
        <?php echo $i; ?>
    </head>
    <body>
        <a href="index.php?action=home">Home</a>
        <a href="index.php?action=gallery">Gallery</a>
        <a href="index.php?action=article">Article</a><br>
        <?php echo $trigger; ?>
    </body>
</html>