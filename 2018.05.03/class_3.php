<?php
include_once 'MyOOTest.php';
include_once '../2018.05.02/Bike.php';

$root = new MyOOTest();
$sub1 = new Sub1();
$sub2 = new Sub2();

$bike = new Bike();

doM2($sub1);
doM2($sub2);
function doM2(MyOOTest $obj){

    if($obj instanceof Sub1){
        echo 'I am sub1<br>';
    }else if($obj instanceof Sub2){
        echo 'I am sub2<br>';

    }else if($obj instanceof MyOOTest){
        echo 'I am MyOOTest<br>';

    }

}