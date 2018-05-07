<?php
include_once 'sql.php';

if (isset($_REQUEST['account'])){
    $account = $_REQUEST['account'];
    $password = $_REQUEST['password'];
    $name = $_REQUEST['name'];

    $sql = "insert into `member` (`name`,`account`,`password`)" .
        " values ('{$name}','{$account}','{$password}')";

    if($mysqli->query($sql)){
        header('Location: login.php');

    }else {
        echo 'insert error';
    }
}

?>

<form>
    Account: <input type="text" name="account"><br>
    Password: <input type="password" name="password"><br>
    Real name: <input type="text" name="name"><br>
    <input type="submit" value="sent"><br>
</form>


