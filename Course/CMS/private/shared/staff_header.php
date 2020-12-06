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
 echo url_for('stylesheets/staff.css'); ?>">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
      <ul class="menu-nav">
        <li>
          <button type="button" class="btn btn-light">
            <a class="style-link" href="<?php
		 echo WWW_ROOT.'/staff/index.php';?>">Menu</a>
          </button>
        </li>
      </ul>
    </nav>
    <!--END OF Navigation area-->