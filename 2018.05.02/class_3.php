<?php

//產生畫布
$img = imagecreatetruecolor(600, 200);
//$img2 = imagecreate(400, 400);

//開始作畫

$yellow = imagecolorallocate($img, 255, 100, 0);
imagefill($img, 0, 0, $yellow);


//輸出
header('Content-Type:image/jpeg');
imagejpeg($img);

//清除記憶體
imagedestroy($img);



