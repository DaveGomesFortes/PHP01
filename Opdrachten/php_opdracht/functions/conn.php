<?php
    function conn(){
        ini('conf/conf.ini');
        $localhost = DBCONNECTION[0];
        $user = DBCONNECTION[1];
        $password = DBCONNECTION[2];
        $db_name = DBCONNECTION[3];
        $connection = mysqli_connect($localhost, $user, $password, $db_name);
        if (!$connection){
            die('Connection failed: '.mysqli_connect_error());
        }
        return $connection;
    }
