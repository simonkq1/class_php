<?php
include_once 'sql.php';
$account = $_POST['account'];
$password = $_POST['password'];
$sql = "select * from member where account ='{$account}' and password = '{$password}'";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
//    return 1;
    echo "0";
}else {
//    return 0;
    echo "1";
}
