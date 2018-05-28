<?php
include_once 'sql.php';
$account = $_POST['account'];
$password = $_POST['password'];
$sql = "select * from member where account =? and password = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('ss',$account,$password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
//    return 1;
    echo "0";
}else {
//    return 0;
    echo "1";
}
