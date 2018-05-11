<?php
include_once 'class_6.php';
$x = $_REQUEST['x'];
$y = $_REQUEST['y'];
$result = calXY($x, $y);

//header("location: class_7.html?result={$result}");
$view=file_get_contents('class_7.html');
$view=str_replace('###',$result,$view);
echo $view;