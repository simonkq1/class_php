<?php
    $p = array(1 => 0, 0, 0, 0, 0, 0);
    var_dump($p);
    echo '<br>';


    for ($i = 0; $i < 100; $i++) {
        $d = rand(1, 6);
    //    echo $d;
        $p[$d]++;
    }

    for ($i = 1; $i <= 6; $i++) {
        echo "{$i}點出現{$p[$i]}次<br>";
    }

