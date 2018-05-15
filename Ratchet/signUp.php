<?php
include_once 'sql.php';
if (isset($_REQUEST['account']) && isset($_REQUEST['password'])) {
    $rName = $_REQUEST['realName'];
    $account = $_REQUEST['account'];
    $password = $_REQUEST['password'];

    $newPassword = password_hash($password, PASSWORD_DEFAULT);


    $sql = "insert into member (`name`,`account`,`password`) values ('{$rName}','{$account}','{$newPassword}')";
//    $result = $mysqli->query($sql);


    if($mysqli->query($sql)){

        header('Location:login.php');
    }else {
        echo 'error';
    }

}

?>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<form>


    Real Name:
    <input type="text" name="realName"><br>


    Account:
    <input type="text" name="account" id="account"><br>


    Password:
    <input type="password" name="password" id="password"><br>



    <input type="submit" value="sent">

</form>
