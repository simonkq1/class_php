<?php

include_once 'MyOOTest.php';
session_start();

if (!isset($_SESSION['s1'])) header('Location: class_1.php');

$s1=$_SESSION['s1'];

echo $s1->calSum(). ':'. $s1->calAvg().'<br>';

?>

<a href="class_3.php">class3</a>
