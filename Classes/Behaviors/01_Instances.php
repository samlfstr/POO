<?php


// basic class declaration
// instances
// some class methodes


const br = "<br>";

class  FirstClass
{

}


$instance = new FirstClass();
$classes = get_declared_classes();
// loop & compare
foreach ($classes as $class) {
    if (is_a($instance, $class)){
        echo "{$class} is a $class".br;
    }
}