<?php
    include ('functions/bootstrap.php');
    bootstrap();
    $trigger = trigger();
    $i = css('css', 'css');
    conn();

    $result = mysqli_query(conn(), 'SELECT * FROM `menu`');

    $array=[];
    if (mysqli_num_rows($result) > 0)
    {
        while ($row=mysqli_fetch_assoc($result))
        {
            $array[]=$row;
        }
    }
    $render = '';
    foreach ($array as $values)
    {
        $render.= '<a href="'.$values['href'].'">'.$values['label'].'</a><br>';
    }

    ?>
<html lang="en">
    <head>
        <title>Database</title>
        <?php echo $i; ?>
    </head>
    <body>
        <?php echo $render; echo $trigger?>
    </body>
</html>