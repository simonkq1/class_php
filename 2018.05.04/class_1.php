<?php
 include_once 'MyOOTest2.php';

 $obj1=new Rectangle();
 $obj2=new Triangle();
 $obj3=0;

// $obj1->calArea();

calShapeArea($obj1);
echo '<br>';
calShapeArea($obj2);
echo '<hr>';
$s1=new Students1();
$s2=new Students2();
$s3=new Students3();

if($s2 instanceof iOS){
    echo 'OK<br>';
}else{
    echo 'XX<br>';
}
$s1->exam1();

 function calShapeArea(Shape $shape){

     $shape->calArea();

 }