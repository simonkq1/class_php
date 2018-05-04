<?php

//定義規格: 介面
interface Shape
{
    function calLength();

    function calArea();

}

interface iOS
{
    function exam1();
}

interface ZCE
{
    function exam2();

}


class Rectangle implements Shape
{

    function calLength()
    {
        echo 'Rectangle:calLength()';

    }

    function calArea()
    {
        echo 'Rectangle:calArea()';

    }
}

class Triangle implements Shape
{

    function calLength()
    {

        echo 'Triangle:calLength()';
    }

    function calArea()
    {

        echo 'Triangle:calArea()';
    }
}

class Students1 implements iOS, ZCE
{
    public function exam1()
    {
        echo 'exam1()';
    }

    public function exam2()
    {
        echo 'exam2()';
    }
}
class Students2 implements iOS
{
    public function exam1()
    {
        echo 'exam1()';
    }

}
class Students3 implements ZCE
{


    public function exam2()
    {
        echo 'exam2()';
    }

}

abstract class Students4 implements iOS{

}

