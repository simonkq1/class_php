<?php
include_once 'sql.php';
if (isset($_POST['tid']) && isset($_POST['mod'])) {
    $tid = $_POST['tid'];
    $mod = $_POST['mod'];

    $id = $tid / 1;


    $sql = "update member set `mod` = ? where id = ?;";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("si", $tid, $id);


    if ($stmt->execute()) {
        echo 1;
    } else {
        echo 2;
    }
}

?>
