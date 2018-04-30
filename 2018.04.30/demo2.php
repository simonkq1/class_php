<?php
$id = 'A123456789';
if(preg_match("/^[A-Z][12]\d{8}$/",$id)){
    echo 'OK';
}else{
    echo 'XX';

}




//if (preg_match("/[A-Z][12]\d{8}/",$id)){
//    echo 'OK';
//}else{
//    echo 'XX';
//}