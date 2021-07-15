<?php require_once('../private/initialize.php');?>

<?php
$cols['menu_name'] = "x";
$cols['position'] = "y";
$cols['visible'] = "z";
$cols['id'] = "1";

$sql_query = "Update pages Set ";
$sql_query .= "menu_name='" . $cols['menu_name'] . "', ";
$sql_query .= "position='" . $cols['position'] . "', ";
$sql_query .= "visible='" . $cols['visible'] . "' ";
$sql_query .= "Where id='" . $cols['id'] . "'";


?>
<!doctype html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport"
			 content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Globe Bank</title>
</head>
<body>

</body>
</html>