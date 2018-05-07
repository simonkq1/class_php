<?php
include_once 'sql.php';
$account=$_REQUEST['account'];
$password=$_REQUEST['password'];

$sql="select * from member ".
    "where account='{$account}' and password='{$password}'";
$psw="select * from member ".
    "where password='{$password}'";

$result = $mysqli->query($sql);

//echo $result->num_rows;



if($result->num_rows>0){
    echo 'OK';
}else {
    echo 'XX';
}
