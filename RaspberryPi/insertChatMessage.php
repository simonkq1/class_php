<?php
include_once 'sql.php';
include_once 'member.php';

if (isset($_POST['sid'])& isset($_POST['gid'])& isset($_POST['text'])) {

    $sid = $_POST['sid'];
    $gid = $_POST['gid'];
    $text = $_POST['text'];

    $sql="insert into chat (`text`,`sid`,`gid`) values (?,?,?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("sii", $text,$sid,$gid);

    if ($stmt->execute()) {
        echo 0;
    }else {
        echo 1;
    }
}else {
    echo 2;
}