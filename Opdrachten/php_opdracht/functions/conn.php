<?php
    function conn(){
        $connection = mysqli_connect('localhost', 'root', '', 'fruit_db');
        if (!$connection){
            die('Connection failed: '.mysqli_connect_error());
        }
        return $connection;
    }
