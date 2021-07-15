<?php


class EigthClass
{
    // a static var
    static $grades = ['first', 'second', 'third'];

    // a static method
    static function Objective()
    {
        return 'Learn PHP good!';
    }
}

// direct access with two columns

echo EigthClass::$grades[0] . "<br>";
echo EigthClass::$grades[1] . "<br>";
echo EigthClass::$grades[2] . "<br>";

echo EigthClass::Objective();