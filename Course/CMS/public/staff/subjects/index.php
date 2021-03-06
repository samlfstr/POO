<?php require_once('../../../private/initialize.php'); ?>
<?php

/*
 * DB :
 * This is what we call seeding =)
*/


// Pull all the subjects from db
$subject_list = all_subjects();


/* // Take the row number of the db table
$count = mysqli_num_rows($subject_list);

// Save all the raw information into an array
for($i=0; $i < $count; $i++){
 $subjects[] = mysqli_fetch_assoc($subject_list);
}
 */
while ($subject = mysqli_fetch_assoc($subject_list)) {
    $subjects[] = $subject;
}

if (is_empty($pages)) {
    redirect_to(url_for("staff/pages/empty_list.php"));
}

/*$subjects = [
  ['id' => '1', 'position' => '1', 'visible' => '1', 'menu_name' => 'About Globe Bank'],
  ['id' => '2', 'position' => '2', 'visible' => '1', 'menu_name' => 'Consumer'],
  ['id' => '3', 'position' => '3', 'visible' => '1', 'menu_name' => 'Small Business'],
  ['id' => '4', 'position' => '4', 'visible' => '1', 'menu_name' => 'Commercial'],
];*/


/*
To facilitate the understanding of what you are doing
you can use variables.
*/

// url query ?var_name=sth
$path_show = url_for('staff/subjects/show.php?id=');
$path_edit = url_for('staff/subjects/edit.php?id=');
$path_delete = url_for('staff/subjects/delete.php?id=');


?>

<?php $page_title = 'Subjects'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

  <!--Content area-->
  <div id="content">
    <div class="subjects listing">
      <h1>Subjects</h1>

      <div class="actions">
        <button type="button" class="btn btn-light">
          <a class="style-link action" href="<?php echo url_for("/staff/subjects/new.php"); ?>"> Create New
            Subject</a>
        </button>
      </div>


      <!--Table-->
      <table class="list">
        <thead>
        <tr>
          <th>ID</th>
          <th>Position</th>
          <th>Visible</th>
          <th>Name</th>
          <th>&nbsp;</th>
          <th>&nbsp;</th>
          <th>&nbsp;</th>
        </tr>
        </thead>

        <!-- For Loop -->
          <?php foreach ($subjects as $subject) : ?>
            <tr>
              <td><?php echo $subject['id']; ?></td>
              <td><?php echo $subject['position']; ?></td>
              <td><?php echo $subject['visible'] == 1 ? 'true' : 'false'; ?></td>
              <td><?php echo $subject['menu_name']; ?></td>

              <td>
                <a class="action" href=" <?php echo $path_show .
                    u($subject['id']); ?>">View </a>
              </td>

              <td><a class="action" href="<?php echo $path_edit . u($subject['id']); ?>">Edit</a>
              </td>

              <td id="delete-btn">
                <a class="action btn btn-primary" data-toggle="modal"
                   data-target="#message<?php echo $subject['id']; ?>">Delete</a>
              </td>


              <!-- Modal -->
              <div class="modal fade" id="message<?php echo $subject['id']; ?>" tabindex="-1" role="dialog"
                   aria-labelledby="ModaLable" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="ModaLable">Do you want to delete ?</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <?php echo $subject['menu_name']; ?>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <a class="action btn btn-primary"
                         href="<?php echo $path_delete . u($subject['id']); ?>">Delete</a>
                    </div>
                  </div>
                </div>
              </div>


            </tr>


          <?php endforeach; ?>
        <!-- END OF For Looop -->

          <?php
          mysqli_free_result($subject_list);
          ?>

      </table>
      <!-- END OF Table -->
    </div>
  </div>
  <!--END OF Content area-->

<?php include(SHARED_PATH . '/staff_footer.php'); ?>