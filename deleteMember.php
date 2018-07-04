<?php
include_once 'sql.php';
include_once 'member.php';

$target = $_POST["target"];
$i = $target * 1;

$sql="delete from member where id=?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("i",$i);

if ($stmt->execute()) {
    echo 0;
}else {
    echo 1;
}
