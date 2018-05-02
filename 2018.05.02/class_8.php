<?php

include_once 'Bike.php';

$brad = new People();
$brad->setBike();
$brad->bike->upSpeed();
echo $brad->bike->getSpeed().'<br>';

$you = new People();
$you->setBike();
$you->bike->upSpeed();
$you->bike->upSpeed();
$you->bike->upSpeed();
echo $you->bike->getSpeed().'<br>';





//function speedPlus($rounds){  //private
//    include_once 'Bike.php';
//    $myBike=new Bike();
//
//    for($i=0;$i<=$rounds;$i++){
//
//        $myBike->upSpeed();
//    }
//
//    echo $myBike->getSpeed().'<br>';
//}
//speedPlus(6);


