<?php

session_start();


$a = range(1,20);
echo $a;

$_SESSION['a']=$a;
$a[2]=100;

foreach ($a as $k=>$v){
    echo "$k => $v <br>";
}
?>
<hr>
<a href="class_2.php">class2</a>
