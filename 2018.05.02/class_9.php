<?php

include_once 'Bike.php';

$myBike = new Bike();

echo $myBike->getSpeed().'<br>';

$yourBike=new Bike(1.2);
echo $yourBike->getSpeed().'<br>';

echo Bike::$counter;


