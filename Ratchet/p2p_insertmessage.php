<?php
include_once 'sql.php';
include_once 'member.php';
include_once 'Chat.php';
include_once 'data.php';

session_start();
$member = $_SESSION['member'];
$toId=$_SESSION['toId'];
$myId=$_SESSION['myId'];
$text=$_REQUEST['text'];
$sql="insert into chattext (`text`,`date`,`cid`,`toid`) values ('$text',now(),$myId,$toId)";

$result = $mysqli->query($sql);
//$sql2="select name from member where id=$toId";
//$result2=$mysqli->query($sql);
//$data2=$result2->fetch_assoc();
//if ($result = $mysqli->query($sql)) {
//if($result->num_rows>0){
//
//    while ($data = $result->fetch_assoc()) {
//        $message[]=$data;
////        if($data['cid']==$member->id){//        echo '<br>';
////        }
//    }
//    $return=json_encode($message);
//    echo $return;
//}
//
//}

//echo " <p id='a'>{$data->name} >> &nbsp;{$data->date}: <span id='chatSpan'> &nbsp; {$data->text} &nbsp; </span></p>";
