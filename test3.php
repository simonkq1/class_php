<?php

$myfile = file_get_contents("./StopTime.json");
$mydata = json_decode($myfile, true);
var_dump($mydata);
//echo $mydata;

//foreach ($mydata as $k => $v) {
//    echo "{$k} : {$v}";
//}