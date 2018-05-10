<?php
$cont = file_get_contents("https://cloud.culture.tw/frontsite/trans/SearchShowAction.do?method=doFindTypeJ&category=6");

$root = json_decode($cont);
//
//$obj1=new MyTest2(1,2,3);
//foreach ($obj1 as $k => $v) {
//    echo "{$k} : {$v} <br>";
//}
//
//    foreach ($root as $k => $v) {
//        $title=$v->title;
//        $showUnit = $v->showUnit;
//        echo "{$title} : {$showUnit}<br>";
//    }

foreach ($root as $k => $v) { //尋訪每個元素 =>一筆資料=>Object
    //尋訪每個物件的屬性
    foreach ($v as $kk => $vv) {
        echo "{$kk}";
        if (is_array($vv)) {
            foreach ($vv as $kkk => $vvv) {
                //$kkk =>0,1,2,3
                if (is_array($vvv) || is_object($vvv)) {

                    foreach ($vvv as $kkkk => $vvvv) {
                        //$kkkk =>key
                        //$vvvv =>value
                        echo "<li>{$kkkk} : {$vvvv}</li>";
                    }
                } else {
                    echo "$vvv";
                }
            }

        } else {

            echo " : {$vv}";
        }
        echo '<br>';
    }
    echo '<hr>';
}


class MyTest2
{
    var $x, $y, $z;

    function __construct($x, $y, $z)
    {
        $this->x;
        $this->y;
        $this->z;
    }
}