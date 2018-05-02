<?php
function primeNumbers($num)
{
    echo '<table border="1"  width="50%" align="center"">';
    ($num % 10 == 0) ? ($k = (int)($num / 10)) : ($k = (int)($num / 10) + 1);
    for ($n = 0; $n < $k; $n++) {
        echo "<tr>";
        for ($i = 1; $i <= 10; $i++) {
            $primeCheck = 0;
            if ($num % 10 == 0) {
                $r = $i + $n * 10;
            } else {
                $r = $i + $n * 10 - (10 - $num % 10);
            }
            for ($j = 1; $j <= $r; $j++) {
                if ($r % $j == 0) {
                    $primeCheck++;
                }
            }
            if ($r > 0) {
                echo "<td width='10%' align='center' bgcolor='" . (($primeCheck == 2) ? "yellow" : "") . "'>{$r}</td>";   //如果$r'只'被整除兩次  bgcolor=yellow

            } else {
                echo "<td width='10%' align='center' ></td>";
            }
        }

        echo "</tr>";
    }


    echo '</table>';

}

primeNumbers(92)
?>



