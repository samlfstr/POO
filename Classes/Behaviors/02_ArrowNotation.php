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
$class_vars = get_class_vars('SecondClass');

// it takes instance vars as key and it's initialised values
$object_vars = get_object_vars($first_member);

// loop through each method
foreach ($class_vars as $class_var => $val) {
    echo $class_var . " -> " . $val."<br>";
}
echo '<br>';
foreach ($object_vars as $object_var => $val) {
    echo $object_var . " -> " . $val."<br>";
}


