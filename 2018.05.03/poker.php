<?php

$poker =array();
$x=array();
for(;count($x)<51;){
    $r= rand(1,51);
    $poker[] =$r;
    $x=array_unique($poker);
}
//var_dump($poker);
foreach (array_values($x) as $k=>$v){
    echo "{$k} : {$v}<br>";

}
echo '<hr>'.count($x);