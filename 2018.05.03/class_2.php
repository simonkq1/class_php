<?php
include_once '../2018.05.02/Bike.php';

$m1 = new Member('123');
$m1->id = '122'; $m1->name='brad';
echo $m1->id.':' .$m1->name;