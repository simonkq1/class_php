<?php
include_once 'sql.php';
include_once 'message.php';

$sql = "select * from `group` ";

if ($result = $mysqli->query($sql)) {
    if ($result->num_rows > 0) {
        while ($data = $result->fetch_assoc()) {
            $messageData[] = $data;
        }
        $jsonData = json_encode($messageData);
        echo $jsonData;
    }
}


