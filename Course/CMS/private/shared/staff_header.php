<?php
	if(!isset($page_title)){
	 $page_title = 'Staff Area';
	}
?>

<!doctype html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport"
			 content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" media="all" href="<?php
 echo WWW_ROOT.'/stylesheets/staff.css';
 ?>">
 <title>GBI -<?php echo $page_title; ?></title>
</head>
<body>
<!--Header area-->
<header>
 <h1>GBI Staff Area</h1>
</header>
<!--END OF Header area-->

<!--Navigation area-->
<nav>
 <ul>
	<li><a href="<?php
		 echo WWW_ROOT.'/staff/index.php';?>">Menu</a></li>
 </ul>
</nav>
<!--END OF Navigation area-->