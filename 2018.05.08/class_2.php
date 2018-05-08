<?php

session_start();

$a=$_SESSION['a'];
foreach ($a as $k=>$v){
    echo "$k => $v <br>";
}
echo $a;