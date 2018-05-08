<?php
include_once 'MyOOTest.php';
session_start();

$s1=new Student(90,87,66);

echo $s1->calSum() .":". $s1->calAvg();
$_SESSION['s1']=$s1;

?>

<hr>
<a href="class_2.php">class2</a>
