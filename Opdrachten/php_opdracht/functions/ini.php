<?php
    function ini($path){
        $ini_array = parse_ini_file($path);
        define('DBCONNECTION', [$ini_array['db[host]'], $ini_array['db[usr]'], $ini_array['db[pw]'], $ini_array['db[dbname]']]);
        return DBCONNECTION;
    }