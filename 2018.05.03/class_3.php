<?php
include_once 'MyOOTest.php';
include_once '../2018.05.02/Bike.php';

$root = new MyOOTest();
$sub1 = new Sub1();
$sub2 = new Sub2();

$bike = new Bike();

doM2($sub1);
doM2($sub2);
echo '<hr>';

$sub11 = new Sub1();
$sub22 = new Sub2();
$sub11->x = 12;
$sub22->x = 34;

echo "{$sub11->x} : {$sub22->x}<br>";
$sub33 = clone $sub22;
$sub22 = $sub11;

echo "{$sub11->x} : {$sub22->x} : {$sub33->x}<br>";

$sub22->x=56;

echo "{$sub11->x} : {$sub22->x} : {$sub33->x}<br>";

echo '<hr>';

//$test1 = new Test1();  //抽象類別無法被建立出物件實體!!!
$test11 = new Test11();
$test12 = new Test12();



function doM2(MyOOTest $obj)
{

    if ($obj instanceof Sub1) {
        echo 'I am sub1<br>';
    } else if ($obj instanceof Sub2) {
        echo 'I am sub2<br>';

    } else if ($obj instanceof MyOOTest) {
        echo 'I am MyOOTest<br>';

    }

}