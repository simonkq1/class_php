<?php
//if (isset($_FILES['upload'])) {
//
//}
$upload = $_FILES['upload'];
//foreach ($_FILES as $key => $value) {
////    echo "{$key} : {$value}<br>";
//    echo "{$key} : ";
//    var_dump($value);
//    echo "<hr/>";
foreach ($upload['error'] as $key => $value) {
    if ($value == 0) {
        if (copy($upload['tmp_name'][$key],
            "../2018.05.01/test3/{$upload['name'][$key]}")){
            echo 'upload Ok : ' . $upload['name'][$key].'<br>';
        }else{

            echo 'upload Fail : ' . $upload['name'][$key].'<br>';
        }
    }
}
