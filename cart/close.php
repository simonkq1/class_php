<?php
include_once 'sql.php';
include_once 'Cart.php';
include_once 'member.php';

session_start();
$cart = $_SESSION['cart'];
$member = $_SESSION['member'];

foreach ($cart->getList() as $pid => $num) {
    $cid = $member->id;
//    $sql1 = "select * from `order` where `pid`=$pid and `cid`=$cid and `amount`=$num";
//    if (!$mysqli->query($sql1)) {

        $sql = "insert into `order` (pid,cid,amount,odate) values ($pid,$cid,$num,now())";
        $mysqli->query($sql);
//    }
//    else{

//    }
}



//session_destroy();
header('Location:main.php');