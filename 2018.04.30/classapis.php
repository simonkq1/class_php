<?php
function creataAnswer($n)
{
    $tmp = range(0, 9);
    shuffle($tmp);
    $ret = '';
    for ($i = 0; $i < $n; $i++) {
        $ret .= $tmp[$i];
    }

    return $ret;
}

function checkAB($topic, $ans){
    if ($topic != $ans){
        echo '1A2B';
    }

}

