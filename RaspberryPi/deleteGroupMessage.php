<?php
include_once 'sql.php';
include_once 'member.php';
if ($_POST['gid']) {

    $gid = $_POST['gid'];

    $sql="delete from `group` where gid=?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i",$gid);

    if ($stmt->execute()) {
        $sql="delete from `chat` where gid=?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("i",$gid);
        if ($stmt->execute()) {
            echo 0;
        }
    }else {
        echo 1;
    }

}