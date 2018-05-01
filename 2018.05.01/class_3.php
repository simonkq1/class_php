<?php
$fp = opendir("/Applications/MAMP/htdocs/2018.05.01/test2/");

while ($file = readdir($fp)){
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