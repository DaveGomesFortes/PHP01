<?php
    function delete()
    {
        $connection = conn();
        if (!empty($_GET['id']) && is_numeric($_GET['id']))
        {
            $sql = 'DELETE FROM `fruit` WHERE `id`="'.$_GET['id'].'"';

            if (mysqli_query($connection, $sql))
            {
                header('Location: index.php?action=fruit');
            }
        }
        else
        {
            die('<h1>ERROR 403</h1>');
        }
    }