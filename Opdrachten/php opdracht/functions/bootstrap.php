<?php
    function bootstrap(){
        $array = glob('functions/*.php');

        foreach ($array as $a){
            include_once $a;
        }
        return true;
    }