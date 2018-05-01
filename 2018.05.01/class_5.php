<?php
$fp=fopen("https://tw.stock.yahoo.com/q/q?s=2345",'r');
//$cont = fread($fp,20);
//echo nl2br($cont);
while($cont = fgets ($fp)){

    if (preg_match('/href/',$cont)){
        if (preg_match('/2345/',$cont)){
            echo '==>'.$cont;
        }
//echo '==>'.$cont;
    }

//    echo $cont;
}
?>

<!---->
<!--<form>-->
<!--    <input type="file" name="upload">-->
<!--</form>-->