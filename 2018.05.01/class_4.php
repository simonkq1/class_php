<?php
$fp=fopen("test1/class_1.txt",'r+');
//$cont = fread($fp,20);
//echo nl2br($cont);


//while($cont = fgets($fp)){
//    echo $cont.'<br>';
//}

//$cont = fread($fp, 2000);
fwrite($fp,"Hello, World123122");
fclose($fp);
?>

<!---->
<!--<form>-->
<!--    <input type="file" name="upload">-->
<!--</form>-->