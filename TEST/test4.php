<?php
include_once 'sql.php';
include_once 'member.php';
include_once 'Chat.php';

session_start();
$member = $_SESSION['member'];
$rows2=$_SESSION['rows'];

$sql = "select chattext.cid,chattext.date,chattext.text,member.name from chattext,member where chattext.cid=member.id";
$result = $mysqli->query($sql);
if(!isset($_SESSION['rows'])){
}else{
    if ($result = $mysqli->query($sql)) {
        if($rows2==$result->num_rows){
            echo 'a';
        }else {
            echo 'b';
        }

        echo $rows2;

    }
}

//if ($result = $mysqli->query($sql)) {
//
//    while ($data = $result->fetch_object('Chat')) {
//        foreach ($data as $k => $v) {
//            echo "{$v}:";
//        }
//        echo '<br>';
//    }
//}