<?php
$score = rand(0, 100);
echo $score . '<br>';
if($score>=90){
    echo 'A';
}else if($score>=80){
    echo 'B';
}else if($score>=70){
    echo 'C';
}else if($score>=60){
    echo 'D';
}else {
    echo 'E';
}

echo '<hr>';


$var1 = 10; $var2 = 3;
if ($var1++ >10 & $var2++ <3){
    echo "OK: {$var1} : {$var2}<br>";
}else{
    echo "XX: {$var1} : {$var2}<br>";
}


?>


