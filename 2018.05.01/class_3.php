<?php
$fp = opendir("test1");

while ($file = readdir($fp)){
    if (is_dir("test1/{$file}")) {
        echo '[dir]';
    }else if(is_file("test1/{$file}")){
        echo '[file]';
    }
    echo $file.'<br>';
}

closedir($fp);


//$s1 = readdir($fp);
//echo $s1.'<br>';
//$s1 = readdir($fp);
//echo $s1.'<br>';
//$s1 = readdir($fp);
//echo $s1.'<br>';
//$s1 = readdir($fp);
//echo $s1.'<br>';