<?php

//傳值

function test1($var1){
    $var1 += 10;
    //return $var1;

}
$var1 = 100;
$var2 = test1($var1);
echo $var1 . ':' . $var2;
