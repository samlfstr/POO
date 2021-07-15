<?php
require_once('db_cred.php');

/*$con = pg_connect("$host $port $dbname $user $password");

$query = "";

$result = pg_query($con, $query) or die("Cannot execute query: $query\n");
echo $json_response = "[";
while ($row = pg_fetch_object($result)) {
    echo $json_response = json_encode($row) . ",";
}
echo $json_response = ']';*/

try {
    $psql_pdo = new PDO("pgsql:".$host,$dbname,$user,$password);
    echo "Succesfully connected";
}catch (PDOException $e){
    echo $e->getMessage();
}