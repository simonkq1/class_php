<?php
    if(!isset($_REQUEST['pid'])) header('Location: bmain.php');

    $pid=$_REQUEST['pid'];

    for($i=1;$i<=4;$i++){
        $pfile="../2018.05.01/test3/p_{$pid}_{$i}.jpg";
        if(file_exists($pfile)){
            echo "<img src='$pfile' /> <br>";
        }
    }