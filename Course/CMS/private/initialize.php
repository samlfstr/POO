<?php

// enabling the output buffering
ob_start();
/*

- Assingn paths to PHP constants
- __FILE__ returns the current path to this file
- dirname() returns the path to the parent directory

- $_SERVER['SCRIPT_NAME'] returns the absolute path

   Note : Every path is relative to the current file in where we are now.

*/

// directory in which initialize.php file founds
define("PRIVATE_PATH", dirname(__FILE__));

// directory in which private folder founds
define("PROJECT_PATH", dirname(PRIVATE_PATH));

// public path is equal to ...
define("PUBLIC_PATH", PROJECT_PATH.'/public');

// shared path is equal to ...
define("SHARED_PATH", PRIVATE_PATH.'/shared');

// this fucking varible is an integer
$public_end = strpos($_SERVER['SCRIPT_NAME'],'/public') + 7;
// or full path containing the name of the relative
// file we are executing
$doc_root = substr($_SERVER['SCRIPT_NAME'],0,$public_end);
define("WWW_ROOT",$doc_root);

require_once('functions.php');
require_once('database.php');
require_once('query_functions.php');

$db = db_connect();