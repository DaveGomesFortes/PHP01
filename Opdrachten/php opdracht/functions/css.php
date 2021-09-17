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

$i = css('css', 'css'); ?>