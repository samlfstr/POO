<?php require_once('../../../private/initialize.php'); ?>

<?php include(SHARED_PATH . '/staff_header.php'); ?>

<?php


$page_list = all_pages();

while ($page = mysqli_fetch_assoc($page_list)) {
    $pages[] = $page;
}

if(is_empty($pages)){
    redirect_to(url_for("staff/pages/empty_list.php"));
}


/* $pages = [
 ['id' => 1, 'path' => "public/index.php"],
 ['id' => 2, 'path' => "Staff/index.php"],
 ['id' => 3, 'path' => "Staff/Pages/index.php"],
 ['id' => 4, 'path' => "Staff/Subject/index.php"],
 ['id' => 5, 'path' => "Staff/Subject/show.php"],
]; */

$path_pages_p = url_for('staff/pages/show.php?id=');
$path_edit_p = url_for('staff/pages/edit.php?id=');
$path_delete_p = url_for('staff/pages/delete.php?id=');

?>

    <!--Content area-->
    <div id="content">

        <table class="table table-striped">
            <thead>
            <tr>
                <th> Pages</th>
                <th> Subject Id</th>
                <th> Menu Name</th>
                <th> Position</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($pages as $page) : ?>
                <tr>
                    <td>
                        <?php echo $page['id']; ?>
                    </td>
                    <td>
                        <?php echo $page['subject_id']; ?>
                    </td>
                    <td>
                        <?php echo $page['menu_name']; ?>
                    </td>
                    <td>
                        <?php echo $page['position']; ?>
                    </td>
                    <td id="d-btn">
                        <a class="action btn btn-outline-info" href="<?php echo $path_pages_p . u(h($page['id'])); ?>">View</a>
                    </td>
                    <td id="d-btn">
                        <a class="action btn btn-outline-secondary"
                           href="<?php echo $path_edit_p . u(h($page['id'])); ?>">Edit</a>
                    </td>

                    <td id="d-btn">
                        <a class="action btn btn-danger" data-toggle="modal"
                           data-target="#message<?php echo $page['id']; ?>">Delete</a>
                    </td>

                    <!--Modal: modalConfirmDelete-->
                    <div class="modal fade" id="message<?php echo $page['id']; ?>" tabindex="-1" role="dialog"
                         aria-labelledby="ModaLable"
                         aria-hidden="true">
                        <div class="modal-dialog modal-notify modal-danger" role="document">
                            <!--Content-->
                            <div class="modal-content text-center">
                                <!--Header-->
                                <div class="modal-header d-flex justify-content-center">
                                    <p class="heading">Are you sure?</p>
                                </div>

                                <!--Body-->
                                <div class="modal-body">
                                    <p> Delete
                                        <strong> <?php echo $page['menu_name']; ?></strong> page.
                                    </p>
                                </div>

                                <!--Footer-->
                                <div class="modal-footer flex-center">
                                    <a href="<?php echo $path_delete_p . u($page['id']); ?>"
                                       class="btn  btn-outline-danger">Yes</a>
                                    <a type="button" class="btn  btn-light waves-effect" data-dismiss="modal">No</a>
                                </div>
                            </div>
                            <!--/.Content-->
                        </div>
                    </div>
                    <!--Modal: modalConfirmDelete-->

                </tr>

            <?php endforeach; ?>
            </tbody>
        </table>

    </div>
    <!--END OF Content area-->

<?php include(SHARED_PATH . '/staff_footer.php'); ?>