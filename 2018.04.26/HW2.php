

<form>
<input type="text" name="y" value="">

<input type="submit" value="="/>
</form>

<?php
$y = $_GET['y'];
$z = $y%4;
$x = $y%100;
$c = $y%400;

if($z==0 && $x==0 && $c==0){
    echo '閏年';
}else if($z==0 && $x==0){
    echo '不是閏年';
}else if($z==0){
    echo '閏年';
}else {

    echo '不是閏年';
}

?>
<!--z=0  y-->
<!--z=0 x=0 n-->
<!--z=0 x=0 y=0 y-->
<!---->
<!--echo '閏年';-->
<!--echo '不是閏年';-->
