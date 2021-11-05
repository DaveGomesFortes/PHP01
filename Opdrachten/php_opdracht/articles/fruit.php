<?php
    function fruit(){
        $connectie = conn();
        $result = mysqli_query($connectie, select_all('fruit'));

        $array=[];
        if (mysqli_num_rows($result) > 0){
            while ($row=mysqli_fetch_assoc($result)){
                $array[]=$row;
            }
        }

        $render = '<h1>Fruit</h1>';
        $render.= '<table>';
        $render.= '<tr><td colspan="3"><a href="?action=add">add</a></td></tr>';
        foreach ($array as $values){
            $render.= '<tr>
                        <td>'.$values['name'].'</td>
                        <td>Kleur =  '.$values['color'].'</td>
                        <td><a href="?action=update&id= '.$values['Id'].'">update</a></td>
                        <td><a href="?action=delete&id= '.$values['Id'].'">delete</a></td>
                    </tr>';
        }
        $render.= '</table>';

        return $render;
    }