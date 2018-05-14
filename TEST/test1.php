<?php
include_once 'sql.php';
include_once 'member.php';
include_once 'Chat.php';

session_start();
$member = $_SESSION['member'];

$sql = "select chattext.cid,chattext.date,chattext.text,member.name from chattext,member where chattext.cid=member.id";
$result = $mysqli->query($sql);
if ($result = $mysqli->query($sql)) {
    while ($data = $result->fetch_assoc()) {
//        if($data['cid']==$member->id){

            echo " <p id='a'>{$data['name']} >> &nbsp;{$data['date']}: <span id='chatSpan'> &nbsp; {$data['text']} &nbsp; </span></p>";
//        echo '<br>';
//        }

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