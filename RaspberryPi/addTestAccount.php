<?php
include_once 'sql.php';
    $data = ["a001", "a002", "a003"];

    $sql = "select * from member";
    $result = $mysqli->query($sql);


    foreach ($data as $v) {
        if ($result->num_rows > 0) {
            $newPassword = password_hash($v, PASSWORD_DEFAULT);
            $sql = "insert into member (`username`,`account`,`password`) values (?,?,?)";
            $stmt = $mysqli->prepare($sql);
            $stmt->bind_param("sss",$v,$v,$newPassword);
        }else {
            $mod = 1;
            $sql = "alter table member auto_increment = 1";
            $mysqli->query($sql);
            $sql = "insert into member (`username`,`account`,`password`,`mod`) values (?,?,?,?)";
            $stmt = $mysqli->prepare($sql);
            $stmt->bind_param("ssss",$v,$v,$newPassword,$mod);
        }
        if($stmt->execute()){
            echo "{$v} => success\n";
        }else {
            echo "{$v} => faild\n";
        }
    };




?>
