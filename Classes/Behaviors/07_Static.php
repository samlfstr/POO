<?php


class EigthClass
{
    static $grades = ['first','second','third'];

    static function Objective(){
        return 'Learn PHP good!';
    }
}

echo EigthClass::$grades[1];
echo EigthClass::Objective();