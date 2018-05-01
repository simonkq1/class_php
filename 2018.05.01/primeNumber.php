

<?php
function primeNumbers($num)
{
  echo  '<table border="1"  width="50%" align="center"">';
    $k=(int)($num/10);
for($n=0;$n<$k;$n++){
    echo "<tr>";

    for ($i = 1; $i <= 10; $i++) {
        $primeCheck = 0;

        $r=$i+$n*10;
        for ($j = 1; $j <= $r; $j++) {
            if ($r % $j == 0) {
                $primeCheck++;
            }
        }
        echo "<td width='10%' align='center' bgcolor='".(($primeCheck==2)?"yellow":"")."'>{$r}</td>";   //如果$r'只'被整除兩次  bgcolor=yellow
    }

    echo "</tr>";
}


echo'</table>';

}
primeNumbers(100)
?>



