<?php
require_once('pg_crediantials.php');

function pg_connection()
{
    global $connection_st;
    $connection = pg_connect($connection_st);
    if ($connection == false) {
        die(pg_errormessage($connection));
    }
    return $connection;
}