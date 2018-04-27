<<<<<<< HEAD
<form>
<input type="text" name="v1">
<input type="text" name="v2">
<input type="submit" name="v3" value="=">

<?php
    $v1 = $_GET['v1'];
    $v2 = $_GET['v2'];
    $v1 = 50;
    $v2 = 3;
    $v3 = $v1/$v2;
    $v4 = floor($v3);
    $v5 = $v1%$v2;
    echo  "{$v1} / {$v2} = {$v4}.....{$v5} <hr>";


?>

</form>

