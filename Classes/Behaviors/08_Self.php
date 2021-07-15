<?php


/*
Even if we talk about that in the 12th php file I wanted to demonstrate it here to
It is very simple if you want other class to be able to override the parent class variable
you'll do it static instead of self. Self is used to prevent other class to override.
*/


class ninethClass
{
    public static $gender = ['male', 'female', 'unknown'];

    static function showGender()
    {
        foreach (static::$gender as $item) {
            echo $item . "<br>";
        }
    }

}

class halfNine extends ninethClass
{
    public static $gender = ['This is an override'];
}

echo "Parent class :" . "<br>";
ninethClass::showGender();
echo "<hr>";
echo "Child class :" . "<br>";
halfNine::showGender();
