<?php

//$poker =array();
//for($i=1;$i<=52;$i++)
//    $poker[] =$i;
//var_dump($poker);

//

for ($i = 0; $i < 52; $i++) {


    do {
        $r = rand(0, 51);

        $isRepeat = false;
        for ($j = 0; $j < $i; $j++) {
            if ($poker[$j] == $r) {
                //重複了
                $isRepeat = true;
                break;
            }
        }

    }while($isRepeat);
    $poker[$i] = $r;
}
foreach ($poker as $v) {
    echo "{$v}<br>";
}


