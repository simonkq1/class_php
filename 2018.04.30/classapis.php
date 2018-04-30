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

function checkAB($a, $g)
{
    $A = $B = 0;
    if ($a != $g) {
        for ($i = 0; $i < strlen($a); $i++) {
//    if($a 中的第$i碼 == $g中的第$i碼)
//        $A++;
//}else if() {
//    $B++;
//        }

            if (substr($a, $i, 1) === substr($g, $i, 1)) {
                $A++;
            } else if (strpos($a, substr($g, $i, 1)) !== false) {
                $B++;
            }

        }

        return "{$A}A{$B}B";

    } else {
        return 'correct';

    }

}




/*
 a | b
-------
472|123 =>1B
   |423 =>1A1B
   |411 =>1A
   |
   |
*/



