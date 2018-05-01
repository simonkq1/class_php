<?php
$poker = range(0, 51);
shuffle($poker);        //洗牌


foreach ($poker as $k => $v) {
    echo "{$k} -> {$v}<br>";
}

echo '<hr>';

$players = array(array(), array(), array(), array());
//發牌  4個玩家

foreach ($poker as $i => $p) {

    $z = $i % 4;
    $x = floor($i / 4);
    $players[$z][$x] = $p;
}

//
//$players = array(array(), array(), array(), array());
//
//foreach ($poker as $i => $p) {
//
//    $players[$i%4][(int)($i/4)] = $p;
//    //$players[$i%4][] = $p;
//}

// 顯示牌

foreach ($players[0] as $v) {
    echo "{$v}<br>";
}

echo '<hr>'

?>

<table border="1" width="100%">
    <?php
    //        for ($i=0;$i<4;$i++){
    //        echo "<tr>";
    //        foreach ($players[$i] as $p)
    //            echo "<td>{$p}</td>";
    //        echo "</tr>";
    //        }

    $suits = array('&spades;', '&hearts;', '&diams;','&clubs;' );
    $v = array('A',2,3,4,5,6,7,8,9,10,'J','Q','K');

    foreach ($players as $player) {
        echo "<tr>";
        foreach ($player as $p) {
        $a=floor($p/13);
        $s=$p%13;


            echo "<td>{$suits[(int)($p/13)]}{$v[$p%13]}</td>";
        }
        echo "</tr>";

    }
    ?>
</table>
<!-- &spades; &hearts; &diams; &clubs;  -->

