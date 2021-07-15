<?php

/* Some times we want to simplify the creation process of a class*/

class FourteenthCreate
{
    public const CATEGORIES = ['Male', 'Female', 'Transgender'];
    public $name;
    public $age;
    public $adress;

    public static function create()
    {
        $object_name = get_called_class();
        return new $object_name;
    }

    public function info()
    {
        return 'Name :' . $this->name . "<br>" . "Age : " . $this->age . "<br>" . 'Adress :'
            . $this->adress . "<br>";
    }
}

$new_person = FourteenthCreate::create();
$new_person->name = "Samuel Foster";
$new_person->age = 29;
$new_person->adress = 'Yenimahalle/Ankara';
echo $new_person->info();