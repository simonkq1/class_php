<?php
include_once 'sql.php';

if (isset($_REQUEST['account'])) {
    $account = $_REQUEST['account'];
    $password = $_REQUEST['password'];
    $name = $_REQUEST['name'];

    $newpassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "insert into `member` (`name`,`account`,`password`)" .
        " values ('{$name}','{$account}','{$newpassword}')";

    if ($mysqli->query($sql)) {
        header('Location: login.php');

    } else {
        echo 'insert error';
    }
}

?>

<script src="https://code.jquery.com/jquery-1.11.3.js"></script>
<script>

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            var ret = xhttp.responseText;
            if (ret!=0){
                document.getElementById('mesg').innerHTML='XXX';


            }else{

                document.getElementById('mesg').innerHTML='OK';
            }
        }


    };

    function isNewAccount() {
       var account =  document.getElementById('account').value;
       xhttp.open('GET','isNewAccount.php?account='+account,true);
       xhttp.send();
    }
</script>

<form>
    Account: <input type="text" id="account" name="account" onkeyup="isNewAccount()"><span id="mesg" ></span><br>
    Password: <input type="password" name="password"><br>
    Real name: <input type="text" name="name"><br>
    <input type="submit" value="sent"><br>
</form>


