<?php
require_once('db_credentials.php');

$con = pg_connect("$host $port $dbname $user $password");

$query = "select * from customers";

$result = pg_query($con, $query) or die("Cannot execute query: $query\n");
echo $json_response = "[";
while ($row = pg_fetch_object($result)) {
    echo $json_response = json_encode($row) . ",";
}
echo $json_response = ']';