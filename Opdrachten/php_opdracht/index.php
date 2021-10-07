<?php
    include ('functions/bootstrap.php');
    bootstrap();
    ini("conf/conf.ini");
    conn();
    $con= conn();
    $trigger = trigger($con);
    $i = css('css', 'css');

    $result = mysqli_query(conn(), select_all('menu'));

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
        $render.= '<a href="'.$values['href'].'">'.$values['label'].' </a>';
    }
    ?>
<html lang="en">
    <head>
        <title>Database</title>
        <?php echo $i; ?>
    </head>
    <body>
        <?php echo $render; echo $trigger;?>
    </body>
</html>