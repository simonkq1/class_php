<?php
date_default_timezone_set("Asia/Taipei");
$fp = opendir("test1");

while ($file = readdir($fp)) {
    if (is_dir("test1/{$file}")) {
        echo '[dir]';
    } else if (is_file("test1/{$file}")) {
        echo '[file]';
    }
    echo $file . ' : ' . filesize("test1/{$file}") .' : '.
        date("Y-m-d H:i:s",filemtime("test1/{$file}"))
        . '<br>';
}

closedir($fp);



//unlink("test1/class_1.txt");



//$s1 = readdir($fp);
//echo $s1.'<br>';
//$s1 = readdir($fp);
//echo $s1.'<br>';
//$s1 = readdir($fp);
//echo $s1.'<br>';
//$s1 = readdir($fp);
//echo $s1.'<br>';