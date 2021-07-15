<?php


class Cat
{
    public static $instance;
    protected $mood;
    protected $hungary;
    protected $energy;

    public function __construct()
    {
        $this->mood = "Normal";
        $this->hungary = 5;
        $this->energy = "5";
    }

    public static function create()
    {
        self::$instance++;
        $class_name = get_called_class();
        return new $class_name;
    }

    public function meow()
    {
        echo "Meow !!! " . "<br>";
    }

    public function status()
    {
        return "Mood : " . $this->mood . "<br>" . "Hungary : " . $this->hungary . "<br>" . "Energy : "
            . $this->energy . "<br>";
    }

}

class Sleep extends Cat
{

    public function __construct()
    {
        parent::__construct();
        $this->energy++;
        $this->hungary++;
        $this->mood = "Down";
    }

    public static function create()
    {
        return parent::create();
    }

}

class Play extends Cat
{
    public function __construct()
    {
        parent::__construct();
        $this->energy--;
        $this->hungary++;
        $this->mood = "Up";
    }

    public static function create()
    {
        return parent::create();
    }
}

class Feed extends Cat
{
    public function __construct()
    {
        parent::__construct();
        $this->energy++;
        $this->hungary--;
        $this->mood = "Up";
    }

    public static function create()
    {
        return parent::create();
    }
}

$cat = Cat::create();
echo $cat->status();
echo "<br>";
$catSlp = Sleep::create();
echo $catSlp->status();