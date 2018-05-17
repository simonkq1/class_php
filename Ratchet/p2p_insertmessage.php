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