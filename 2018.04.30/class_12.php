<?php

include_once 'classapis.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $isRight = checkTWId($id);
    if ($isRight){
        echo 'OK';
    }else{
        echo 'XX';
    }

}


?>
<form>
    <input type="text" name="id"/>
    <input type="submit" value="check">
</form>