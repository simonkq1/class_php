<?php
include_once 'Ratchet/sql.php';


$sql = "select chattext.cid,chattext.date,chattext.text,member.name,chattext.toid "
    ."from chattext,member where member.name='Simon' order by date";
$result = $mysqli->query($sql);
if($result->num_rows>0){

    while ($data=$result->fetch_assoc()){
        $a[]=$data;
    }
//        foreach ($d as $k => $v){
//            foreach ($v as $kk => $vv){
//
//                echo "{$kk} : {$vv} <br>";
//            }
//        }
    $m=json_encode($a);
        echo $m;
//    $d=json_decode($m);
//    var_dump($m);echo '<br>';
}