<?php
include_once 'sql.php';

$sql = "select cid,date,text from chattext";
$result = $mysqli->query($sql);
$a=$result->num_rows;
if ($result = $mysqli->query($sql)) {

    while ($data = $result->fetch_assoc()) {
        echo "{$data['cid']} {$data['date']} : {$data['text']}";
        echo '<br>';
        }
        echo $a;

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