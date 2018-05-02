<?php
$img = imagecreatefromjpeg("image/crop400x100.jpeg");

$dst = imagecreatetruecolor(100, 100);
$blue = imagecolorallocate($img, 0, 0, 255);

$src_w = imagesx($img);
$src_h = imagesy($img);

if($src_w<$src_h){
    //長的
    $dst_h=100;
    $dst_w=(100/$src_h)*$src_w;
    $dst_y=0;
    $dst_x=100/2-$dst_w/2;

}
else{
    //寬的
    $dst_w=100;
    $dst_h=(100/$src_w)*$src_h;
    $dst_x=0;
    $dst_y=100/2-$dst_h/2;
}
imagecopyresized($dst, $img,$dst_x,$dst_y,0,0,$dst_w,$dst_h,$src_w,$src_h);


header("Content-type: image/jpeg");

imagejpeg($dst);   //,"../2018.05.01/test3/new.jpg");

imagedestroy($img);
imagedestroy($dst);