<?php
    function gallery(){
    $array = glob("img/*.{jpg}", GLOB_BRACE);
    $result = '';
    foreach ($array as $a)
    {
        $result.= '<br><img src="'.$a.'">';
    }
    return $result;
}
    ?>
