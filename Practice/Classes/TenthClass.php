<?php


class TenthClass
{
    public static $gender = ['male', 'female', 'unknown'];
}

class Person extends TenthClass{

    // I am able to overwrite and when I do that a new var is created
    public static $gender = null;
    public static function modify(){
        parent::$gender[] = "alien";
    }
}

Person::modify(); // add alien to the main class
var_dump(TenthClass::$gender); // all the elements of the main class
var_dump(Person::$gender); // cleared, overwritten and null $gender variable