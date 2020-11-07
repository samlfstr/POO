<?php 

require_once('../../../private/initialize.php'); 

if (is_post_request()) {
  $name = $_POST['menu_name'] ?? "";
  $position = $_POST['position'] ?? "";
  $visible = $_POST['visible'] ?? 0;

  $sql = "insert into subjects ";
  $sql .= "(menu_name, position, visible) ";
  $sql .= "values (";
  $sql .= "'" . $name . "',";
  $sql .= "'" . $position . "',";
  $sql .= "'" . $visible . "'";
  $sql .= ")";

  $result = mysqli_query($db, $sql);

  if($result){
    $new_id = mysqli_insert_id($db);
    redirect_to(url_for('staff/subjects/show.php?id=' . $new_id));
  }else{
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }

}else{
  redirect_to(url_for('/staff/subjects/new.php'));
}