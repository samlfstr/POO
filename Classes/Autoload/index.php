<?php
include "Shared/autoload.php";

/*
 * instead of using the include construct we can
 * actually use the spl_autoload_register function
 * include "Project/Adress.php";
 * include "Project/Age.php";
 */

// Implementation
$adress = new Adress(['country' => 'Turkey', 'city' => 'Ankara', 'code_postal' => 06370]);
$age = new Age('27');
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Autoload</title>
</head>
<body>
<div style="margin: 30px 10rem;">
  <h1>About</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus ea magni
    necessitatibus rerum vero?</p>
  <p>
  <p>
    <u>Adress</u>
  </p> <?php echo $adress->get_adress(); ?>
  <p>Age : <?php echo $age->get_age(); ?> </p>
  <p>Path : <?php echo $_SERVER['SCRIPT_NAME']; ?></p>
</div>
</body>
</html>
