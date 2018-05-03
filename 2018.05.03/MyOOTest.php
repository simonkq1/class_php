<?php

class MyOOTest
{
    function m1()
    {
        echo 'MyOOTest:m1()';
    }
}

class Sub1 extends MyOOTest
{
    var $x;
    function m1()
    {
        echo 'Sub1:m1()';
    }

    function m2()
    {
        echo 'Sub1:m2()';
    }
}
class Sub2 extends MyOOTest
{
    function m1()
    {
        echo 'Sub2:m1()';
    }

    function m2()
    {
        echo 'Sub2:m2()';
    }
}
abstract class Test1{
    function m1(){
        echo 'Test1:m1()<br>';
    }
    abstract function m2 ();
}

class Test11 extends Test1{
    function m2()
    {
        echo 'Test11:m2()<br>';
    }
}
class Test12 extends Test1{
    public function m2()
    {
        echo 'Test12:m2()<br>';

    }
}