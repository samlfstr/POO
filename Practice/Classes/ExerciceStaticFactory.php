<?php


class ExerciceStaticFactory
{
    public static $info = "This is the information";

    public static function create()
    {
         $class_name = get_called_class();
         return new $class_name;
    }
}

$instance = ExerciceStaticFactory::create();
echo ExerciceStaticFactory::$info;