<?php
    function css($path,$exe){
        $array = glob($path.'/*.{'.$exe.'}', GLOB_BRACE);
        $result = '';
        foreach ($array as $a)
        {
            $result.= '<link href="'.$a.'" rel="stylesheet" type="text/css">';
        }
        return $result;
    }

    $i = css('css', 'css')
    ?>

<html>
    <head>
        <?php echo $i ?>
        <title>Opdracht 3</title>
    </head>
    <body>
        <h1>Hallo</h1>
        <h2>Test</h2>
    </body>
</html>
