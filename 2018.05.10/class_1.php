<?php
$cont = file_get_contents("http://gis.taiwan.net.tw/XMLReleaseALL_public/scenic_spot_C_f.json");

$root = json_decode($cont);

var_dump($cont);
