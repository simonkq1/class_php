<?php
$dsn = "mysql:host=localhost;dbname=apple";
//$dsn = 'dblib:host=<ip address> ; dbname=<database name>';

$pdo = new PDO($dsn ,'root','root');
$stmt=$pdo->query("select * from product");
echo $stmt->rowCount().'<br>';

echo '<hr>';

foreach ($stmt as $k=>$v){
    echo "<br>{$k}:";
    foreach($v as $kk=>$vv){
        echo "{$vv}";
    }

//    $id=$v['id'];
//    $pname=$v['pname'];
//    $price=$v['price'];
//    $qty = $v['qty'];
//
//    echo "{$id} : {$pname} {$price} {$qty} <br>";

}