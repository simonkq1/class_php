<?php
include_once 'sql.php';
include_once 'Chat.php';

$gid = $_POST['gid'];


$sql = "select chat.cid,chat.text,chat.sid,member.username as sname,member.account,chat.gid,chat.date from chat,member,`group`" .
    " where `group`.gid = {$gid} and chat.sid = member.id order by date";
if ($result = $mysqli->query($sql)) {
    if ($result->num_rows > 0) {
        while ($data = $result->fetch_assoc()) {
            $message[] = $data;
        }
        $return = json_encode($message, true);
        echo $return;
    }

}
