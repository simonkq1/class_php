<table border="1" width="50%">

    <?php

    for ($k = 0; $k < 2; $k++) {
        echo '<tr>';
        for ($j = 2; $j <= 5; $j++) {
            $newj = $j + $k * 4;
            $newk = $newj + $k;
//            if($newk%2 ==0){
//                echo '<td bgcolor="yellow">';
//            }else{
//
//                echo '<td bgcolor="pink">';
//            }
//      //------------------------------

            echo '<td bgcolor="' . (($newk % 2 == 0) ? 'yellow' : 'pink') . '">';
//      //------------------------------
//            switch ($newk%2){
//                case 0:
//                    echo '<td bgcolor="yellow">';
//                    break;
//                case 1:
//                    echo '<td bgcolor="pink">';
//                    break;
//            }


            for ($i = 1; $i <= 9; $i++) {
                $r = $newj * $i;
                echo "{$newj} x {$i} = {$r}<br>";
            }

            echo '</td>';
        }
        echo '</tr>';
    }

    ?>
</table>