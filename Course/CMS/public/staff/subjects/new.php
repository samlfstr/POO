<?php

require_once('../../../private/initialize.php');


$test = $_GET['test'] ?? "";
$id = $_GET['id'] ?? 1;

if ($test == "404") {
    echo "There is a 404 error";
    error_404();
} else if ($test == "500") {
    echo "There is a 500 error";
    error_500();
} else if ($test == "redirect") {
    header("Location: index.php");
    exit;
}

$all_subjects = all_subjects();
$subject_count = mysqli_num_rows($all_subjects);
mysqli_free_result($all_subjects);

?>

<?php $page_title = 'Create Subject'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

  <div id="content">

    <button type="button" class="btn btn-light">
      <a class="style-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&#8592; Back to List</a>
    </button>
    <hr>
    <div class="subject new">
      <h3>Create Subject</h3>

      <!-- Send the data to the creaete.php file -->
      <form action="<?php echo url_for('/staff/subjects/create.php'); ?>" method="post">

        <div class="form-group">
          <label for="menu_name">Menu Name</label>
          <input name="menu_name" type="text" class="form-control" id="menu_name" placeholder="Menu Name">
          <small id="menu_help" class="form-text text-muted">Please provide a menu name.</small>
        </div>

        <div class="input-group mb-one-half">

          <div class="input-group-prepend">
            <label class="input-group-text" for="input-group-select"> Position </label>
          </div>

          <select id="input-group-select" name="position">
              <?php

              for ($i = 0; $i <= $subject_count; $i++) {
                  echo "<option value=\"{$i}\">{$i}<option>";
              }

              ?>
          </select>
        </div>

        <div class="custom-control custom-checkbox mb-one-half">
          <input type="checkbox" class="custom-control-input" name="visible" id="visible" value="1">
          <label class="custom-control-label" for="visible">Visible</label>
        </div>

        <button name="submit" type="submit" class="btn btn-primary">Create</button>
      </form>


    </div>

  </div>


<?php include(SHARED_PATH . '/staff_footer.php'); ?>