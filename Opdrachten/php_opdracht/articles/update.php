<?php
    function update()
    {
        $connection = conn();

        $invalid        = null;
        $invalid_name   = false;
        $invalid_color  = false;

        if (!isset($_POST['update']) && isset($_GET['id']) && is_numeric($_GET['id']))
        {
            $sql = 'SELECT * FROM `fruit` WHERE `Id`="'.$_GET['id'].'"';

            if ($array = mysqli_fetch_assoc(mysqli_query($connection, $sql)))
            {
                $_POST = $array;
            }
        }
        elseif (isset($_POST['update']) && isset($_GET['id']) && is_numeric($_GET['id']))
        {
            print_r($_POST);
            if (!isset($_POST['name']) || strlen($_POST['name']) < 4){
                $invalid_name = true;
            }
            if (!isset($_POST['color']) || strlen($_POST['color']) < 3){
                $invalid_color = true;
            }
            if ($invalid_name === true || $invalid_color === true){
                $invalid = '<p>form is invalid</p>';
            }
            else
            {
                $sql = 'UPDATE `fruit`
                    SET `Name`="'.$_POST['name'].'", `Color`="'.$_POST['color'].'"
                    WHERE `Id`='.$_GET['id'];

                if (mysqli_query($connection, $sql)){
                    header('Location: ?action=fruit');
                }
            }
        }
        else{
            die('<h1>403</h1>');
            }

        $form = '<h1>Update</h1>';
        $form.= '<a href="?action=fruit">back</a><hr>';

        $form.= '<form action="" method="post">';
        $form.= 'Fruit Name <input name="name" type="text" value="';
            (isset($_POST['name'])) ? $form.= $_POST['name'] : null;
            $form.= '"><br>';
        $form.= 'Color <input name="color" type="text" value="';
            (isset($_POST['color'])) ? $form.= $_POST['color'] : null;
            $form.= '"><br>';
        $form.= '<input name="update" type="submit" value="update fruit">';
        $form.= '</form>';


        return $form.$invalid;
    }