<?php
    function gallery(){
        $result = '';
        $directory = 'img';
        $array = glob($directory."/*.jpg", GLOB_BRACE);

        foreach($array as $key => $imagepath){
         $result = '<img class="img" src="'.$imagepath.'">';
        }
        return $result;
    }
    ?>
<html lang="en">
    <head>
        <title>Gallery</title>
    </head>
    <body>
        <?php gallery() ?>
    </body>
</html>