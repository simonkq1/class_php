<?php

$a[] = array(4, 5, 6);;
$a[] = array(1, 2, 3);
var_dump($a);

//echo '<hr>';
//
//echo count($a).'<br>';
//echo count($a[1]);


echo '<hr>';

foreach ($a as $sub){
    foreach ($sub as $v){

        echo $v . '';
    }
    echo '<br>';
}
