<?php
    function gallery($path='/', $exe='jpg'){
        $array = glob($path."/*.{".$exe."}");
        $result = '';
        foreach ($array as $a)
        {
            $result = '<img src="'.$a.'">';
        }
        return $result;
    }

    $gallery = gallery('img','jpg')
    ?>
<html lang="en">
    <head>
        <title>Gallery</title>
    </head>
    <body>
        <?php $gallery ?>
    </body>
</html>