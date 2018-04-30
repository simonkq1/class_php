<?php
//do ...... while
$var1 = 1;
do {
    //程式區塊
    //至少做一次
    //後測式(先做再測)
    echo "{$var1}<br>";
    $var1++;
} while ($var1 < 10);