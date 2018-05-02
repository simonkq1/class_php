<?php
$img = imagecreatefromjpeg("image/coffee.jpeg");

$blue = imagecolorallocate($img, 0, 0, 255);
$ang = rand(20, 90);

imagettftext($img, 22, rand(-50, 90), 15, 100, $blue, "fonts/Lora/Lora-Bold.ttf", "A");
imagettftext($img, 22, rand(-20, 90), 40, 100, $blue, "fonts/Lora/Lora-Bold.ttf", "2");
imagettftext($img, 22, rand(20, 90), 60, 100, $blue, "fonts/Lora/Lora-Bold.ttf", "C");
imagettftext($img, 22, rand(30, 120), 80, 100, $blue, "fonts/Lora/Lora-Bold.ttf", "4");

header("Content-type: image/jpeg");

imagejpeg($img);

imagedestroy($img);