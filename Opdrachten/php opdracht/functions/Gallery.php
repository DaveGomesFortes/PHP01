<?php
    function gallery($path, $exe){
        $array = glob($path."/*.{".$exe."}", GLOB_BRACE);
        $result = '';
        foreach ($array as $a)
        {
            $result.= '<img src="'.$a.'">';
        }
        return $result;
}
    $gallery = gallery('img', 'jpg')
?>