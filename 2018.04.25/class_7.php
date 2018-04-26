<?php
$x = $y = $z = $q='';
$op = 1;

if (isset($_GET['x']) && isset($_GET['y'])) {


    $x = $_GET['x'];
    $y = $_GET['y'];
    $op = $_GET['op'];
    if ($op == '1') {
        $z = $x + $y;
    } else if ($op == '2') {
        $z = $x - $y;
    } else if ($op == '3') {
        $z = $x * $y;
    } else if ($op == '4') {
        $z = $x / $y;
    }

//    echo "<b> {$x} + {$y} = {$z} </b><br>";
}

?>


<form>
    <input type="text" name="x" value="<?php echo $x; ?>"/>
    <select name="op">
        <option value="1" <?php if ($op == 1) {
            echo 'selected';
        } ?>>+
        </option>
        <option value="2" <?php if ($op == 2) {
            echo 'selected';
        } ?>>-
        </option>
        <option value="3" <?php if ($op == 3) {
            echo 'selected';
        } ?>>*
        </option>
        <option value="4" <?php if ($op == 4) {
            echo 'selected';
        } ?>>/
        </option>
    </select>
    <input type="text" name="y" value="<?php echo $y; ?>"/>
    <input type="submit" value="="/>

    <?php
    echo "<input type=\"text\" name=\"a\" value='{$z}'/>";
    ?>
</form>
