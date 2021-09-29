<?php
    include ('functions/bootstrap.php');
    bootstrap();
    $trigger = trigger();
    $i = css('css', 'css');
    $conn = mysqli_connect('localhost', 'root', '', 'fruit_db');
    if  (!$conn){
        die('db connection error: '. mysqli_connect_error());
    }

    $result = mysqli_query($conn, 'SELECT * FROM `fruit`');

    $array=[];
    if (mysqli_num_rows($result) > 0){
        while ($row=mysqli_fetch_assoc($result)){
            $array[]=$row;
        }
    }

    $render = 'Database';
    $render.= '<table>';
    $render.= '<tr><td colspan="3"><a href="">add</a></td></tr>';
    foreach ($array as $values){
        $render = '<tr>
                        <td>'.$values['Name'].'</td>
                        <td><a href="">update</a></td>
                        <td><a href="">delete</a></td>
                    </tr>';
    }
    $render.= '</table>'
    ?>
<html lang="en">
    <head>
        <title>Database</title>
        <?php echo $i; ?>
    </head>
    <body>
        <a href="index.php?action=home">Home</a>
        <a href="index.php?action=gallery">Gallery</a>
        <a href="index.php?action=article">Article</a>
        <a href="index.php?action=fruit">Fruit</a><br>
        <?php echo $trigger; echo $render?>
    </body>
</html>