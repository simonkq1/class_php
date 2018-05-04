<?php
include_once 'MyOOTest3.php';
include_once 'MyOOTest4.php';


//$obj1 = new \tw\simon\tools\Test1();
//$obj2 = new \tw\simon\utils\Test1();
//
//$obj1->m1();
//echo '<hr>';
//$obj2->m1();

use tw\Simon\utils\Test1; //class

use tw\Simon\tools\Test1 as Test2; //class

use function tw\simon\utils\sayYa;

$obj3 = new Test1();
$obj3->m1();

$obj4 = new Test2();
$obj4->m1();

sayYa();