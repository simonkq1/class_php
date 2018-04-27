<?php
$p = array(1 => 0, 0, 0, 0, 0, 0);
var_dump($p);
echo '<br>';


for ($i = 0; $i < 1000000; $i++) {
    $d = rand(1, 9);
    //    echo $d;
    $p[$d >= 7 ? $d - 6 : $d]++;
}

for ($i = 1; $i <= 6; $i++) {
    echo "{$i}點出現{$p[$i]}次<br>";
}


echo '<hr>';

for ($i=1;$i<=count($p);$i++){
    echo "{$i}點出現{$p[$i]}次<br>";
}

echo '<hr>';

    foreach ($p as $key => $value){
        echo "{$key}:{$value}<br>";
    }