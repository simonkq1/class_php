<?php

include_once 'sql.php';

    //delete data
//    $delid = $_REQUEST['delid'];
    $sql="delete from product where id = {$product->id}";
    $result = $mysqli->query($sql);
    header('Location: bmain.php');