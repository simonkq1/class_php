<?php

sayYa();sayYa();sayYa();

sayHello('Simon');

sayHello1();

sayHello2(3, 'Simon');
sayHello2(2);

sayHello3();
sayHello3(123);
sayHello3('456');
sayHello3(123,'456',321);
sayHello3(false);



function sayYa()
{
    echo 'Ya<br>';
}



function sayHello($name)
{
    echo "Hello, {$name}<br>";
}


function sayHello1($name='World')
{
    echo "Hello, {$name}<br>";
}


function sayHello2($times, $name='World')
{
    for($i=0;$i<$times;$i++){

        echo "Hello, {$name}<br>";
    }
}

function sayHello3()
{
//    $n = func_num_args();
//    echo $n;

    $ps = func_get_args();   //捕捉所有傳遞進來的參數 變成 array
    foreach ($ps as $k =>$p) {
        echo "{$k} : {$p} <br>";


    }
}
