<?php

/*
 * In this class we can observe the difference between the usage and non usage of the
 * clone keyword and how actually it works.
 * It is a reference when we simply make a copy of an object.
 */

class Referance
{
    public $name;

    public static function create()
    {
        $class_name = get_called_class();
        return new $class_name;
    }

    public function __clone()
    {

    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
}


/* Here b changed the value of the a
because in php when we equalize an object
to another like that that is a copy of the ref.
That means both point to the same memory zone
*/

/*
 * Simple copy
 */
$a = Referance::create();
$a->name = "First Name";
$b = $a;
$b->name = "Second Name";

echo "B : " . $b->getName() . " <br>";
echo "A : " . $a->getName() . " <br>";
echo "<hr>";

/*
 * Cloning
 */
$a = Referance::create();
$a->name = "First Name";
$b = clone $a;
$b->name = "Second Name";

echo "A : " . $a->getName() . " <br>";
echo "B : " . $b->getName() . " <br>";
