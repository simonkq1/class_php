<!--//poker1 洗牌-->
<?php

//$poker =array();
//for($i=1;$i<=52;$i++)
//    $poker[] =$i;
//var_dump($poker);

//

for ($i = 0; $i < 52; $i++) {
    $r = rand(0, 51);


//    檢查
    $isRepeat = false;
    for ($j = 0; $j < $i; $j++) {
        if ($poker[$j] == $r) {
            //重複了
            $isRepeat = true;
            break;
        }
    }
    if (!$isRepeat) {

        $poker[$i] = $r;
    } else {
        $i--;
    }
}
foreach ($poker as $v) {
    echo "{$v}<br>";
}


