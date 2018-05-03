<?php


//$r=count($a);

    $b=array();
$a=range(1,15);
    for($i=0;$i<15;$i++){
        $rand = array_rand($a);
        $c=array_search($rand,$a);
        $b[]=$rand;
        array_splice($a,$c,1);
    }



foreach ($b as $k => $v){
    echo "{$k} : {$v} <br>";
}