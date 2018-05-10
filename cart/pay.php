<?php
include_once 'sql.php';
include_once 'member.php';
include_once 'Cart.php';
session_start();
$cart=$_SESSION['cart'];
$member=$_SESSION['member'];
foreach ($cart->getList() as $pid=>$num){
    $cid=$member->id;

    $sql1="select * from `order` where `pid`=$pid and `cid`=$cid and `amount`=$num";
    if($check=$mysqli->query($sql1)){
        $sql="update `order` set `checkout` = 'y' where cid = {$cid}";
        $mysqli->query($sql);
    }else{
        $sql = "insert into `order` (pid,cid,amount,odate) values ($pid,$cid,$num,now())";
        $mysqli->query($sql);
    }


}
$_SESSION['amount']=0;
header('Location: main.php');

//session_destroy();