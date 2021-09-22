<?php
    function bootstrap(){
        $array = glob('functions/*.php', GLOB_BRACE);

        foreach ($array as $a){
            $result.= 'include($a)';
        }
        return $result;
    }