<?php
$rate = $_GET['rate']; //%
//產生畫布
$img = imagecreatetruecolor(700, 50);
//$img2 = imagecreate(400, 400);

//開始作畫

$red = imagecolorallocate($img, 255, 0, 0);
$yellow = imagecolorallocate($img, 255, 100, 0);
imagefill($img, 0, 0, $yellow);
imagefilledrectangle($img, 0, 0,700*($rate/100),50, $red);


//輸出
header('Content-Type:image/jpeg');
imagejpeg($img);

//清除記憶體
imagedestroy($img);



