<?php
    function add(){

        $connect = conn();

        if (isset($_POST['button']))
        {
            $sql = 'INSERT INTO `fruit`(`Name`,`Color`)
                    VALUES ("'.$_POST['FruitName'].'", "'.$_POST['Color'].'")';

            if (mysqli_query($connect, $sql))
            {
                header('Location: ?action=fruit');
            }
        }

        $render = "<h1>Add</h1>";
        $render.= '<a href="?action=fruit">Back</a><br><hr>';

        $render.= '<form method="post" action="">';
        $render.= 'Fruit Name: <input name="FruitName" type="text"><br>';
        $render.= 'Color : <input name="Color" type="text"><br>';
        $render.= '<input name="button" type="submit" value="Add">';
        $render.= '</form>';

        return $render;
    }