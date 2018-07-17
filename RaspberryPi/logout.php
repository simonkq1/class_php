<?php
include_once 'sql.php';

$id = $_POST["id"];


$sql="update `member` set `online` = 'off', `token` = NULL  where `id` = {$id}";

if ($result = $mysqli->query($sql)) {
    echo 0;
}