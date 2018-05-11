<?php
$cont = file_get_contents("http://gis.taiwan.net.tw/XMLReleaseALL_public/scenic_spot_C_f.xml");
$xml = simplexml_load_string($cont);
$error = libxml_get_errors();
//
//foreach ($error as $v) {
//    echo "Error :{$v} <br>";
//}

//var_dump($xml);
//echo  '<hr>';
//echo $xml->getName() . ":" . $xml->count();
echo  '<hr>';

foreach($xml as $k => $v){
//    echo gettype($v).'<br>';
//    echo "{$k} : <br>";
    foreach ($v as $kk=>$vv){
//    echo gettype($vv).'<br>';
//    echo "{$kk} : <br>";
        $attrs=$vv->attributes();
        foreach ($attrs as $field => $values){
            echo "{$field} : {$values} <br>";

        }
        echo '<hr>';
    }
}