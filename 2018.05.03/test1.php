<?php

include_once '../2018.05.02/Bike.php';


function checkGender($id){

    if(TWId::checkTWId($id)){
        $n1=substr($id,0,1);
        $n2=substr($id,1,1);
        if($n2==1){
            echo 'Male<br>';
        }else{

            echo 'Female<br>';
        }
        switch ($n1){
            case 'A': echo '台北市<br>';
        }

        echo 'OK<br>';
    }else{
        echo 'XX<br>';
    }
}
checkGender('A123456789');