<?php
require_once('db_credentials.php');

function db_connect()
{

    /*$connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME); */

    $connection = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

    db_connection_check();

    return $connection;
}

function db_disconnect($connection)
{
    if (isset($connection)) {
        mysqli_close($connection);
    }
}

function db_connection_check()
{

    // Test if connection succeded
    if (mysqli_connect_errno()) {
        $msg = "Database connection failed : ";
        $msg .= mysqli_connect_error();
        $msg .= " (" . mysqli_connect_errno() . ")";
        exit($msg);
    }
}

// It it is not true it is not a result_set
function check_result_set($result_set)
{
    if (!$result_set) {
        exit("Database query failed.");
    }
}