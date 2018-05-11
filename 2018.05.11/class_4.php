<?php
include_once 'sql.php';
include_once 'member.php';
include_once 'Cart.php';

class Message
{
}

$mesg = new Message();
//$member = new Member();
if (isset($_REQUEST['account']) && isset($_REQUEST['password'])) {

    $account = $_REQUEST['account'];
    $password = $_REQUEST['password'];
    $sql = "select * from member where account=?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $account);
    $stmt->execute();

    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $member = $result->fetch_object('member');
        if (password_verify($password, $member->password)) {
            $mesg->status = '0';
            $mesg->id = $member->id;
            $mesg->name = $member->name;
            $mesg->account = $member->account;
            $mesg->password = $member->password;

        } else {

            $mesg->status = '2';
            $mesg->message = 'password wrong';
        }

    } else {
        $mesg->status = '1';
        $mesg->message = 'account not exist';

    }
} else {
    $mesg->status = '3';
    $mesg->message = 'data error';
}
echo json_encode($mesg);


//account=xxx
//password=xxx
//return {'status':'0','id':12,'name':'brad'};
//{'status':'1','message':'account not exist'}
//{'status':'2','message':'password wrong'}
//{'status':'3','message':'data error'}

//
//    $account= $_GET['account'];
//    $password= $_GET['account'];


?>

<!--<form>-->
<!--    <input type="text" name="account">-->
<!--    <input type="password" name="password">-->
<!--    <input type="submit">-->
<!--</form>-->
