<?php
include_once 'sql.php';
include_once 'member.php';
session_start();
$account=$_REQUEST['account'];
$password=$_REQUEST['password'];

$sql="select * from member where account='{$account}'";
$result=$mysqli->query($sql);


if($result->num_rows>0){
    $member=$result->fetch_object('member');
    if(password_verify($password,$member->password)){
        $_SESSION['member']=$member;
//        if(isset($_SESSION['member'])){

            header('Location: chatbox.php');
//        }
    }else{

        header('Location: login.php');
    }
}else{

    header('Location: login.php');
}

