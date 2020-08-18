<?php

// class properties, vars, attibutes
// default values
// arrow notation
// some class variables

class SecondClass
{
    var $name = "Default Name";
    var $country = "None";
    var $gender = "Not Specified";
}

$first_member = new SecondClass();

$first_member->name = "Samuel Foster";
$first_member->country = "Turkey";
$first_member->gender = "Homme";

// it takes class vars as key and default values
$class_methods = get_class_vars('SecondClass');

// it takes instance vars as key and it's initialised values
$object_methods = get_object_vars($first_member);

// loop through each method
foreach ($class_methods as $class_method => $val) {
    echo $class_method . " -> " . $val."<br>";
}
echo '<br>';
foreach ($object_methods as $object_method => $val) {
    echo $object_method . " -> " . $val."<br>";
}


