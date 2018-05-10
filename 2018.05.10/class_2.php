<?php
include_once 'sql.php';

//$sql="insert into product (pname,price,qty) values ('test',123,12)";
//$mysqli->query($sql);

$sql = "insert into product (pname,price,qty) values (?,?,?)";
$stmt = $mysqli->prepare($sql);
$var1 = 'test2';
$var2 = 432;
$var3 = 1222;

//s:string; i:integer; d:double; b:blob
$stmt->bind_param("sii", $var1, $var2, $var3);
$stmt->execute();
