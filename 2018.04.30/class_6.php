<?php

//宣告型別
function test1($x, $y):string //:int
{
    return $x / $y;
}

$r = test1(10,3);
var_dump($r);