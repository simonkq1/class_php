<?php
    if (isset($_GET['x'])&&isset($_GET['y'])){
        $x = $_GET['x'];
        $y = $_GET['y'];
        $z = $x+$y;
        echo "<b> {$x} + {$y} = {$z} </b><br>";


    }

?>


