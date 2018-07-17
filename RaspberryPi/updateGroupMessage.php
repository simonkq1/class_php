<?php
include_once 'sql.php';
if (isset($_POST['text']) && isset($_POST['gid'])) {
    $title = $_POST['title'];
    $text = $_POST['text'];
    $gid = $_POST['gid'];


    $sql = "update `group` set `gtitle` = ?, `gtext` = ? where gid = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ssi",$title,$text,$gid);


    if($stmt->execute()){
        echo 0;
    }else {
        echo 1;
    }
}else {
    echo 2;
}
