<?php 

require_once('../../../private/initialize.php'); 


$test =  $_GET['test'] ?? "";

if($test == "404"){
  echo "There is a 404 error";
  error_404();
}else if($test == "500"){
  echo "There is a 500 error";
  error_500();
}else if($test == "redirect"){
  header("Location: index.php");
  exit;
}
?>

<?php $page_title = 'Edit Subject'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <button type="button" class="btn btn-light">
    <a class="style-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&#8592; Back to List</a>
  </button>
  <hr>
  <div class="subject edit">
    <h3>Edit Subject</h3>

    <form action="" method="post">

      <div class="form-group">
        <label for="menu_name">Menu Name</label>
        <input type="text" class="form-control" id="menu_name" placeholder="Menu Name">
        <small id="menu_help" class="form-text text-muted">Please provide a menu name.</small>
      </div>

      <div class="input-group mb-one-half">

        <div class="input-group-prepend">
          <label class="input-group-text" for="input-group-select"> Position </label>
        </div>

        <select id="input-group-select">
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>

      <div class="custom-control custom-checkbox mb-one-half">
        <input type="checkbox" class="custom-control-input" value="1" name="visible" id="visible">
        <input type="hidden" class="custom-control-input" value="0" name="visible" id="visible">
        <label class="custom-control-label" for="visible">Visible</label>
      </div>

      <button type="submit" class="btn btn-primary">Edit</button>
    </form>


  </div>

</div>


<?php include(SHARED_PATH . '/staff_footer.php'); ?>