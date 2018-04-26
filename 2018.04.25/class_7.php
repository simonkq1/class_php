<?php
    $x = '';
    $y = '';
    $z = '';
if (isset($_GET['x'])&&isset($_GET['y'])){


        $x = $_GET['x'];
        $y = $_GET['y'];
        $op = $_GET['op'];
        if ($op=='1'){
            $z = $x+$y;
        }
        if ($op=='1'){
            $z = $x+$y;
        }        if ($op=='1'){
            $z = $x+$y;
        }        if ($op=='1'){
            $z = $x+$y;
        }

//    echo "<b> {$x} + {$y} = {$z} </b><br>";
}

?>




<form>
    <input type="text" name="x" value="<?php echo $x; ?>"  />
    <select name="op">
        <option value="1">+</option>
        <option value="2">-</option>
        <option value="3">*</option>
        <option value="4">/</option>
    </select>
    <input type="text" name="y"/>
    <input type="submit"  value="="/>

    <?php
    echo "<input type=\"text\" name=\"a\" value='{$z}'/>";
    ?>
</form>
