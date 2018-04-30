
<?php
$num = $sum= '';
if (isset($_GET['num'])){

    $num=$_GET['num'];
    $sum = 0; $i = 1;
    while($i<=$num){
        $sum+=$i;
        $i++;
    }

} ?>
<form>
    1+2+3+....+
    <input type="number" name="num" value="<?php echo $num; ?>"/>
    <input type="submit" value="="/>
    <?php echo $sum; ?>
</form>

