<?php
    function trigger(){
        if (empty($_GET)){
            $_GET['action'] = 'home';
        }

        if (!file_exists('articles/'.$_GET['action'].'.php')){
            die('404 Not Found');
        }

        include('articles/'.$_GET['action'].'.php');
        $f = $_GET['action'];

        return $f();
    }
