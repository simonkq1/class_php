<form>
    <label>
    女<input type="radio" name="gender" value=''></label>
    <label>
    男<input type="radio" name="gender" value='true'></label><br>

    <input type="number" name="rounds" value=1;>
    <input type="submit">

</form>

<?php
$g='';

include_once 'Bike.php';
if(isset($_GET['gender'])){
    $r=$_GET['rounds'];
    $g=$_GET['gender'];
for($i=0;$i<=$r;$i++){
    $myId=new TWId($g);
    echo $myId->getId().'<br>';
}


    if(TWId::checkTWId($myId->getId())){
        echo 'OK';
    }else{
        echo 'XX';
    }
}else{
    echo '';
}

