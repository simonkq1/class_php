<?php
include_once 'sql.php';

    $arr = Array(1,2,3,4,5);
    $json = json_encode($arr);




    $sql="insert into json (`arr`) values (?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $json);

    if ($stmt->execute()) {
        echo 0;
    }else {
        echo 1;
    }