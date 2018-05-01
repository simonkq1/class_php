<table border="1" width="70%">
    <?php
    function numbers($num)
    {
        $k = (int)($num / 10);
        for ($j = 0; $j < $k; $j++) {
            echo "<tr>";
            for ($i = 2; $i <= 11; $i++) {
                $sum = ($i-1) + $j * 10;
                echo "<td>{$sum}</td>";
            }
            echo "</tr>";
        }


//        for ($q = 2; $q <= $sum; $q++) {
//            if ($sum%$==0) {
//                echo "<td>{$sum}</td>";
//            }else{
//                echo "<td bgcolor='yellow'>{$sum}</td>";
//            }
//        }

    }

    numbers(100);

    ?>
</table>



