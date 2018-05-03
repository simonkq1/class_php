<?php

$a1 = range(1, 52);
$a2 = array();
$r = count($a1);
for ($i = 0; $i < $r; $i++) {
    $rand = array_rand($a1);          //$rand是key不是value!!!!!!!!
    $tmp = $a1[$rand];                //抓出抽取項目放置到$tmp
    $a1[$rand] = $a1[count($a1) - 1];   //將'抽取內容'置換成'最後一個項目'
    $a1[count($a1) - 1] = $tmp;         //將'最後一個項目'置換成'抽取內容'  //完成對調
    $a2[$i] = $tmp;                   //將抽取項目放置到$a2的第$i項
    $pop = array_pop($a1);   //刪除$a1最後一個項目 //刪除抽取項目

}

foreach ($a2 as $k => $v) {
    echo "{$k} : {$v} <br>";
}

//print_r($a2);
//echo '<hr>';
//print_r($a1);
//echo $rand.':'.$s;

