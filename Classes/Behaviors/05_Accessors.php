<?php

/*
 * With heritage I can have access to the main classes variables but there are some cases
 * In the first case / situation
 * I declare a new variable in the child class as a copy of the variable that inside vechicle
 *  - When I do that I can have access only to the second variable the copy one. And not the
 *  - that of parent class.
 * It's important because if you want to understand why you can't access the parent classes variable
 * that's because you've a variable declared in the child classes.
 *
 */


class Vehicle
{
    var $color;
    var $doors = 3;
    protected $wheels;

    public function waterproof()
    {
        return true;
    }

    protected function upload_image($file)
    {
        //...
    }

}

class Car extends Vehicle
{
    var $doors;
    protected $wheels = 4;

    public function waterproof()
    {
        return true;
    }
}

class Motorcycle extends Vehicle
{
    var $wheels = 2;
    var $doors = 0;

    function waterproof()
    {
        return false;
    }

}

$car = new Car();
echo $car->doors;
// The access is allowed only inside classes
/*echo $car->wheels;*/


