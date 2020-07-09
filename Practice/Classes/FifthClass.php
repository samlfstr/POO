<?php


class Vehicle
{
    var $color;
    protected $wheels;
    var $doors;

    protected function upload_image($file){
        //...
    }
    public function waterproof(){
        return true;
    }

}

class Car extends Vehicle{
    var $wheels = 4;
    var $doors = 4;

    public function waterproof()
    {
        return true;
    }
}

class Motorcycle extends Vehicle{
    var $wheels = 2;
    var $doors = 0;

    function waterproof()
    {
        return false;
    }

}

$car = new Car();
echo $car->doors;


