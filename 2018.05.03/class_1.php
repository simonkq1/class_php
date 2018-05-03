<?php
include_once '../2018.05.02/Bike.php';

$myScooter = new Scooter();
echo $myScooter->getSpeed().'<br>';

$myScooter->upSpeed();
$myScooter->upSpeed();

echo $myScooter->getSpeed().'<br>';


$myScooter->upSpeed(4);

echo $myScooter->getSpeed().'<br>';