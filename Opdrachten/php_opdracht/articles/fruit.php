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
                        <td>'.$values['Name'].'</td>
                        <td>Kleur =  '.$values['Color'].'</td>
                        <td><a href="">update</a></td>
                        <td><a href="">delete</a></td>
                    </tr>';
        }
        $render.= '</table>';

        return $render;
    }