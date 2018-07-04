<?php
include_once 'sql.php';
include_once 'member.php';
$account = $_POST['account'];
$password = $_POST['password'];

$sql = "select * from member " .
    "where account=?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s",$account);
$stmt->execute();


$result = $stmt->get_result();


if($result->num_rows>0){
    $member=$result->fetch_object('member');
    if(password_verify($password,$member->password)){
        $_SESSION['member']=$member;
//        if(isset($_SESSION['member'])){
        $sql="update member set online='on' where id={$member->id}";
        $mysqli->query($sql);

        echo 0;
//        }
    }else{
        echo 1; //密碼錯誤
    }
}else{
    echo 2;     //帳號錯誤
}

