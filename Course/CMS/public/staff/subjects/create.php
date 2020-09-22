<?php 

require_once('../../../private/initialize.php'); 

if (is_post_request()) {
  $name = $_POST['menu_name'] ?? "";
  $position = $_POST['position'] ?? "";
  $visible = $_POST['visible'] ?? 0;

  echo "Name : " . $name . "<br>";
  echo "Position : " . $position . "<br>";
  echo "Visible : " . $visible . "<br>";
}else{
  redirect_to(url_for('/staff/subjects/new.php'));
}