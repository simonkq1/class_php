<?php
include_once 'sql.php';
include_once 'member.php';

$sql = "select * from member ";

if ($result = $mysqli->query($sql)) {
    if ($result->num_rows > 0) {
        while ($data = $result->fetch_assoc()) {
//            echo $data;
//            var_dump($data);
            $memberData[] = $data;
        }
        $jsonData = json_encode($memberData);
        echo $jsonData;
//        foreach ($result as $k => $v) {
//            echo "{$k} : {$v}";
//        }
//        echo "<hr>";
//        var_dump($result);
//        echo $result;
    }
}


