<?php
    function ini($path){
        $ini_array = parse_ini_file($path);


        define('DBCONNECTION', $ini_array);

        return true;
    }