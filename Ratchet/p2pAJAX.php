<?php
include_once 'sql.php';
include_once 'member.php';
include_once 'Chat.php';
include_once 'data.php';

session_start();
$member = $_SESSION['member'];
$toId=$_SESSION['toId'];
$myId=$_SESSION['myId'];

$sql = "select chattext.cid,chattext.date,chattext.text,member.name,chattext.toid"
    . " from chattext,member where chattext.cid=member.id and chattext.toid={$toId} "
    ."and member.id='{$myId}' order by date";
$result = $mysqli->query($sql);
$sql2="select name from member where id=$toId";
$result2=$mysqli->query($sql);
$data2=$result2->fetch_assoc();
if ($result = $mysqli->query($sql)) {
if($result->num_rows>0){

    while ($data = $result->fetch_assoc()) {
        $message[]=$data;

    }
    $return=json_encode($message);
    echo $return;
}

}
