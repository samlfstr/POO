<?php  require_once ('../../../private/initialize.php');


$menu_name = $_GET['menu_name'] ?? '1';

$sql = "delete from subjects ";
$sql .= "where menu_name=";
$sql .= "'" . $menu_name . "'";

$result = mysqli_query($db, $sql);

if($result){
  redirect_to(url_for('staff\subjects\index.php'));
}else{
  echo mysqli_error($db);
  db_disconnect($db);
  exit;
}