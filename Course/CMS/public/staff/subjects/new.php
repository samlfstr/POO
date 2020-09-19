<?php 

require_once('../../../private/initialize.php'); 


$test =  $_GET['test'];

if($test == "404"){
  echo "There is a 404 error";
  error_404();
}else if($test == "500"){
  echo "There is a 500 error";
  error_500();
}else if($test == "redirect"){
  header("Location: index.php");
  exit;
}else{
  echo "No error";
}
?>