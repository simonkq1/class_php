<?php

class Brad01
{
    var $name, $age, $weight;

    function __construct($name,$age,$weight)
    {
        $this->name = $name;
        $this->age = $age;
        $this->weight = $weight;
    }
}

//JSON => [] , {}
//     => ['name'->'Brad']  XXXX
$a = array(1, 2, 3, 4, 5);
$json1 = json_encode($a);
echo $json1;

echo '<hr>';
$root = json_decode($json1);
var_dump($root);
echo '<hr>';

$obj1 = new Brad01('一二三',18,80);
$obj2 = new Brad01('四五六',22,66);
$obj3 = new Brad01('壹貳參',33,55);
$obj4 = new Brad01('Tony',44,76);

$json2 = json_encode($obj1);
echo $json2;
echo '<hr>';

$root = json_decode($json2);
//var_dump($root);
foreach ($root as $k => $v){
    echo "{$k} : {$v} <br>";
}
echo '<hr>';

$b=array($obj1,$obj2,$obj3,$obj4);
$json3=json_encode($b);
echo $json3;
echo '<hr>';
$root=json_decode($json3);
foreach ($root as $obj){
    foreach ($obj as $field => $value){
        echo "{$field} : {$value} <br>";
    }
    echo '----------------------<br>';
}

echo '<hr>';

