<?php

class Bike
{
//    public $speed = 0;
    protected $speed;        //物件等級的屬性
    const var1 = 123;

    static $counter = 0;  //類別等級的屬性

    public function __construct($initSpeed = 0)  //建構式 建構方法 建構子
    {
        $this->speed = $initSpeed;
        self::$counter++;
        echo 'parent:__construct<br>';
    }

    public function upSpeed()
    {
        $this->speed = $this->speed < 1 ? 1 : $this->speed * 1.2;
    }

    public function downSpeed()
    {
        $this->speed = $this->speed < 1 ? 0 : $this->speed * 0.7;
    }

    public function getSpeed()
    {
        return $this->speed;
    }


}

class Scooter extends Bike
{
    public $gear = 1;

    //override

    function __construct(int $initSpeed = 0)
    {
        parent::__construct($initSpeed);
        echo 'self:__construct<br>';
    }

    function upSpeed($gear = 1)
    {
        parent::upSpeed(); // TODO: Change the autogenerated stub
        $this->gear = $gear;
        $this->speed *= 1.7 * $this->gear;
//        $this->speed =
//        $this->speed = $this->speed < 1 ? 1.5 * $this->gear : $this->speed * 1.8 * $this->gear;
    }

}

class People
{
    public $bike;

    public function setBike()
    {
        $this->bike = new Bike();
    }
//
//    public function upSpeedFromBike(){
//        $this->bike->upSpeed();
//    }
//    public function downSpeedFromBike(){
//        $this->bike->downSpeed();
//    }
//    public function displaySpeedFromBike(){
//        return $this->bike->getSpeed();
//    }

}

class TWId
{
    private $id;
    public static $letters = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';

    public function __construct($id = '', $gender = true, $area = -1)
    {
        if (strlen($id != 0)) {
            if (self::checkTWId($id)) {
                $this->id = $id;
            } else {
                throw new Exception('error id');
            }
            $this->id = $id;
        } else {
            $area = $area == -1 ? rand(0, 25) : $area;
            $this->createNewId($gender, $area);
        }

    }

    private function createNewId($gender, $area)
    {
        $id = substr(self::$letters, $area, 1);
        $id .= $gender ? '1' : '2';
        for ($i = 0; $i < 7; $i++) {
            $id .= rand(0, 9);

        }
        for ($i = 0; $i < 10; $i++) {
            if (self::checkTWId($id . $i)) {
                $this->id = $id . $i;
                break;
            }
        }

    }

    public static function checkTWId($twid)
    {
        $ret = false;
        if (preg_match("/^[A-Z][12]\d{8}$/", $twid)) {

            $c1 = substr($twid, 0, 1);  //'A'
            $n12 = strpos(self::$letters, $c1) + 10;
            $n1 = (int)($n12 / 10);
            $n2 = $n12 % 10;
            $n3 = substr($twid, 1, 1);
            $n4 = substr($twid, 2, 1);
            $n5 = substr($twid, 3, 1);
            $n6 = substr($twid, 4, 1);
            $n7 = substr($twid, 5, 1);
            $n8 = substr($twid, 6, 1);
            $n9 = substr($twid, 7, 1);
            $n10 = substr($twid, 8, 1);
            $n11 = substr($twid, 9, 1);

            $sum = $n1 * 1 + $n2 * 9 + $n3 * 8 + $n4 * 7 + $n5 * 6 + $n6 * 5 + $n7 * 4 + $n8 * 3 + $n9 * 2 + $n10 * 1 + $n11 * 1;
            $ret = ($sum % 10 == 0);


        }
        return $ret;

    }

    public function getGender()
    {
        return true;
    }

    public function gerArea()
    {
        return '台中市';
    }

    public function getId()
    {
        return $this->id;
    }


}

class Member
{
    private $id, $name, $age, $gender;

    function __construct($id)
    {
        $this->id = $id;
    }


    function __get($fname)
    {  //if $fname='id'
        if ($fname == 'name') {
            $ret = 'III:' . $this->$fname;
        } else {
            $ret = $this->$fname;
        }
//        return $this->$fname; //$this->name
        return $ret;

    }

    function __set($fname, $value)
    {
        if ($fname != 'id') {
            $this->$fname = $value;
        }
    }
}