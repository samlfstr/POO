<?php

// First argument is always a th
$attendees = [
    ['name' => 'Tome Heo', 'email' => 'tom@heo.com', 'city' => 'London'],
    ['name' => 'Jhon Deo', 'email' => 'jhon@deo.com', 'city' => 'New York'],
    ['name' => 'Tracey Martin', 'email' => 'tracey@martin.com', 'city' => 'Cape Town'],
    ['name' => 'Angela Sharp', 'email' => 'angela@sharp.com', 'city' => 'Tokyo'],
    ['name' => 'Zayed Bin Masood', 'email' => 'zayad@masood.com', 'city' => 'Dubai'],
];

$names = pluck($attendees, 'name');

var_dump($names);

function pluck($array, $key)
{
    return array_map(function ($v) use ($key) {
        return is_object($v) ? $v->$key : $v[$key];
    }, $array);
}