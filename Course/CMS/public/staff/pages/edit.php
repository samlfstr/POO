<?php

require_once('../../../private/initialize.php');

$id = $_GET['id'] ?? '1';


if (is_post_request()) {

    // Instead of using variables we are using an array to do the same thing
    $cols = [];
    $cols['id'] = $id;
    $cols['subject_id'] = $_POST['subject_id'] ?? "";
    $cols['menu_name'] = $_POST['menu_name'] ?? "";
    $cols['position'] = $_POST['position'] ?? "1";
    $cols['visible'] = $_POST['visible'] ?? "1";

    $result = update_page($cols);

    if ($result) {
        redirect_to(url_for('staff/pages/show.php?id=' . $id));
    } else {
        echo mysqli_error($db);
        db_disconnect($db);
        exit;
    }

} else {
    $page = get_pages_with_id($id);
    $results = mysqli_fetch_row($page);

    $all_subjects = all_subjects();
    $subject_count = mysqli_num_rows($all_subjects);
    mysqli_free_result($all_subjects);
}


?>

<?php $page_title = 'Edit Subject'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

    <div id="content">

        <button type="button" class="btn btn-light">
            <a class="style-link" href="<?php echo url_for('/staff/pages/index.php'); ?>">&#8592; Back to List</a>
        </button>
        <hr>
        <div class="subject edit">
            <h3>Edit Subject</h3>

            <form action="<?php echo url_for('/staff/pages/edit.php?id=' . h(u($id))); ?>" method="post">

                <div class="form-group">
                    <label for="menu_name">Page Name</label>
                    <input name="menu_name" type="text" class="form-control" id="menu_name"
                           placeholder="<?php echo $results[1]; ?>">
                    <small id="menu_help" class="form-text text-muted">Please provide a menu name.</small>
                </div>

                <div class="input-group mb-one-half">

                    <div class="input-group-prepend">
                        <label class="input-group-text" for="input-group-select"> Position </label>
                    </div>

                    <select id="input-group-select" name="position">
                        <?php

                        for ($i = 0; $i <= $subject_count; $i++) {
                            echo '<option value="'.$i.'"';
                            if($results[0] == $i){
                                echo ' selected="selected"';
                            }
                            echo '>' . $i . '</option>';
                        }

                        ?>
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