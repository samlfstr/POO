<?php
function url_for($script_path){
   // Add the leading '/' if not present
   if ($script_path[0] != '/'){
      $script_path = "/" . $script_path;
   }
   return WWW_ROOT . $script_path;
}

function u($string=""){
  return urlencode($string);
}

function h($string=""){
  return htmlspecialchars($string);
}

function error_404(){
  header($_SERVER['SERVER_PROTOCOL'] . "404 Not found");
  exit();
}
function error_500(){
  header($_SERVER['SERVER_PROTOCOL'] . "Internal Server Error");
  exit();
}

