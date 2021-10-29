<?php
    function conn(){
        $connection = mysqli_connect(DBCONNECTION['db']['host'], DBCONNECTION['db']['usr'], DBCONNECTION['db']['pw'], DBCONNECTION['db']['dbname']);
        if (!$connection){
            die('Connection failed: '.mysqli_connect_error());
        }
        return $connection;
    }
