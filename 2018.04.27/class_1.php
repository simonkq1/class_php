<!--<form>-->
<!--    <input type="text" name="v" />-->
<!--    <input type="submit" value="=" />-->
<!--</form>-->
<form>
    <select name="m">
        <option value=1>一月</option>
        <option value=2>二月</option>
        <option value=3>三月</option>
        <option value=4>四月</option>
        <option value=5>五月</option>
        <option value=6>六月</option>
        <option value=7>七月</option>
        <option value=8>八月</option>
        <option value=9>九月</option>
        <option value=10>十月</option>
        <option value=11>十一月</option>
        <option value=12>十二月`</option>
    </select>
    <input type="submit">
</form>

<?php
$m = $_GET['m'];
//    $m = rand(1,12);
//    $v = 10;

    switch ($m) {
        case 1:case 3:case 5:case 7:case 8:case 10:case 12:
            echo '31天';
            break;
        case 4:case 6:case 9:case 11:
            echo '30天';
            break;
        case 2:
            echo '28天';
            break;
    }



    echo '<hr>';


    $a = '1'
    switch ($a){
        case 1:echo 'A';break;
        case '1':echo 'B';break;
    }


 ?>


