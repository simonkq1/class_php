<?php

$a1=range(1,52);
$a2=array();
$r=count($a1);
for ($i=0;$i<$r;$i++){
    $rand=array_rand($a1);
    $s=array_search($rand,$a1);
    $tmp=$a1[$rand];
    $a1[$rand]=$a1[count($a1)-1];
    $a1[count($a1)-1]=$tmp;
    $a2[$i]=$tmp;
    $pop=array_pop($a1);

}

foreach ($a2 as $k => $v){
    echo "{$k} : {$v} <br>";
}

//print_r($a2);
//echo '<hr>';
//print_r($a1);
//echo $rand.':'.$s;

