<?php


class Cloning
{
    private $name;
    private $age;
    private $education;

    public function __clone()
    {
    }

    public static function create($name, $age, $education)
    {
        $instance_name = get_called_class();
        return new $instance_name($name,$age,$education);
    }

    public function print(){
        echo 'Name : '.$this->name."<br>".'Age : '.$this->age."<br>".'Education : '
        .$this->education."<br>";
    }
}


$original = Cloning::create('Samuel', '26','Graduate');
$original->print();

$clone = $original;
$clone = Cloning::create('No','0','Never Born');
$original->print();
$clone->print();
$clone = clone $original;
$clone = Cloning::create('No','0','Never Born');
$original->print();
$clone->print();