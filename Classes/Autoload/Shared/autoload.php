<?php
spl_autoload_register('autoload');

function autoload($class_name)
{
    $path = "project/";
    $extention = '.php';
    $full_path = $path . $class_name . $extention;

    include_once $full_path;
}