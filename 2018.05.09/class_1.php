<?php
    $cont = file_get_contents("https://cloud.culture.tw/frontsite/trans/SearchShowAction.do?method=doFindTypeJ&category=6");

    $root = json_decode($cont);
    //
    //$obj1=new MyTest2(1,2,3);
    //foreach ($obj1 as $k => $v) {
    //    echo "{$k} : {$v} <br>";
    //}

    foreach ($root as $k => $v) {
        $title=$v->title;
        $showUnit = $v->showUnit;
        echo "{$title} : {$showUnit}<br>";
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