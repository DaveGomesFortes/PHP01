<?php
    function fruit(){
        return '<h1>Fruit</h1>';
        conn();

        $result = mysqli_query(conn(), 'SELECT * FROM `fruit`');

        $array=[];
        if (mysqli_num_rows($result) > 0){
            while ($row=mysqli_fetch_assoc($result)){
                $array[]=$row;
            }
        }

        $render = 'Database';
        $render.= '<table>';
        $render.= '<tr><td colspan="3"><a href="">add</a></td></tr>';
        foreach ($array as $values){
            $render.= '<tr>
                        <td>'.$values['Name'].'</td>
                        <td><a href="">update</a></td>
                        <td><a href="">delete</a></td>
                    </tr>';
        }
        $render.= '</table>';

        return $render;
    }