<?php
include_once 'sql.php';
if (isset($_POST['text']) && isset($_POST['sid'])) {
    $title = $_POST['title'];
    $text = $_POST['text'];
    $member = $_POST['member'];
    $sid = $_POST['sid'];

    $sid = $sid / 1;


    $newPassword = password_hash($password, PASSWORD_DEFAULT);



    $sql = "insert into `group` (`gtitle`,`gtext`, `gmember`, `sid`) values (?,?,?,?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("sssi",$title,$text,$member,$sid / 1);



    if($stmt->execute()){
        echo 0;
    }else {
        echo 1;
    }
}else {
    echo 2;
}
