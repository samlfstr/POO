<?php


class ninethClass
{
    private static $gender = ['male','female','unknown'];

    static function showGender(){
        foreach (self::$gender as $item) {
            echo $item . "<br>";
        }
    }

}

ninethClass::showGender();