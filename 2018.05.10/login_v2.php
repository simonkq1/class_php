<?php
include_once 'sql.php';

if(isset($_REQUEST['account'])){

    $account = $_REQUEST['account'];
    $password = $_REQUEST['password'];
//    $newPassword=password_verify($password,PASSWORD_DEFAULT);
    $sql = "select * from member where account=? and password=?";
    echo $sql.'<br>';
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ss",$account,$password);
    $stmt->execute();
    $result=$stmt->get_result();
    if ($result->num_rows>0){
        echo 'OK';
    }else{
        echo 'XX';
    }

//    if($stmt->num_rows>0){
//        echo 'OK';
//    }else{
//        echo 'XX';
//    }
}


?>

<h1>Login page</h1>
<hr>

<form  method="get">
    Account: <input type="text" name="account"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="sign in"><br>
    <button type="button" onclick="location.href='register.php'" name="newlogin">
        sign up
    </button>
    <br>
</form>


