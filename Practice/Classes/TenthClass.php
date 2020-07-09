<?php


class TenthClass
{
    public static $gender = ['male', 'female', 'unknown'];
}

class Person extends TenthClass{

}

echo Person::$gender[] = 'shemale';
var_dump(TenthClass::$gender);