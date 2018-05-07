<?php
include_once 'sql.php';
$account = $_REQUEST['account'];
$password = $_REQUEST['password'];

$sql = "select * from member " .
    "where account='{$account}'";


$result = $mysqli->query($sql);


if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();

    if(password_verify($password,$data['password'])){
        echo 'OK';
    }else {
         echo 'XX';
    }

//    foreach ($data as $k => $v){
//        echo "{$k} => {$v}<br>";
//    }
} else {
     echo 'XX2';
}
