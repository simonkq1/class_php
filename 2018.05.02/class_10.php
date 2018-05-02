<form>
    <label>
        女<input type="radio" name="gender" value=''></label>
    <label>
        男<input type="radio" name="gender" value='true'></label><br><br>

    <!--    <input type="number" name="rounds" value=0><br>-->
    數量<select name="rounds">
        <option value='1'>1</option>
        <option value='10'>10</option>
        <option value='30'>30</option>
        <option value='50'>50</option>
        <option value='100'>100</option>
    </select><br><br>

    <label> 台北市<input type="radio" name="area" value="0"/></label>
    <label>台中市<input type="radio" name="area" value="1"/></label>
    <label>基隆市<input type="radio" name="area" value="2"/></label>
    <label>臺南市<input type="radio" name="area" value="3"/></label>
    <label>高雄市<input type="radio" name="area" value="4"/></label><br>
    <label>新北市<input type="radio" name="area" value="5"/></label>
    <label>宜蘭縣<input type="radio" name="area" value="6"/></label>
    <label>桃園市<input type="radio" name="area" value="7"/></label>
    <label>新竹縣<input type="radio" name="area" value="8"/></label>
    <label>苗栗縣<input type="radio" name="area" value="9"/></label><br>
    <label>臺中縣<input type="radio" name="area" value="10"/></label>
    <label>南投縣<input type="radio" name="area" value="11"/></label>
    <label>彰化縣<input type="radio" name="area" value="12"/></label>
    <label>雲林縣<input type="radio" name="area" value="13"/></label>
    <label>嘉義縣<input type="radio" name="area" value="14"/></label><br>
    <label>臺南縣<input type="radio" name="area" value="15"/></label>
    <label>高雄縣<input type="radio" name="area" value="16"/></label>
    <label>屏東縣<input type="radio" name="area" value="17"/></label>
    <label>花蓮縣<input type="radio" name="area" value="18"/></label>
    <label>臺東縣<input type="radio" name="area" value="19"/></label><br>
    <label>澎湖縣<input type="radio" name="area" value="20"/></label>
    <label>陽明山<input type="radio" name="area" value="21"/></label>
    <label>金門縣<input type="radio" name="area" value="22"/></label>
    <label>連江縣<input type="radio" name="area" value="23"/></label>
    <label>嘉義市<input type="radio" name="area" value="24"/></label><br>
    <label>新竹市<input type="radio" name="area" value="25"/></label><br><br>

    <input type="submit">

</form>
<?php

echo "<table width='21%' border='1'>";
include_once 'Bike.php';

$r = $_GET['rounds'];
$g = $_GET['gender'];
$a = $_GET['area'];
echo '<tr>';
if ($r > 10) {
    for ($j = 1; $j <= $r / 10; $j++) {
        echo '<td>';
        for ($i = 0; $i < 10; $i++) {
            $myId = new TWId(isset($_GET['gender']) ? $g : rand(0, 1), isset($_GET['area']) ? $a : -1);
            echo $myId->getId() . '<br></p>';
        }
        echo '</td>';
    }
} else {

    echo '<td>';
    for ($i = 0; $i < $r; $i++) {
        $myId = new TWId(isset($_GET['gender']) ? $g : rand(0, 1), isset($_GET['area']) ? $a : -1);
        echo $myId->getId() . '<br>';
    }
    echo '</td>';
}


echo '</tr>';
//if (TWId::checkTWId($myId->getId())) {
//    echo 'OK';
//} else {
//    echo 'XX';
//}
echo '</table>';