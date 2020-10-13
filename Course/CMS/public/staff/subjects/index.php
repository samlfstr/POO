<?php require_once('../../../private/initialize.php'); ?>
<?php

/*
 * DB :
 * This is what we call seeding =)
*/

$subject_set = all_subjects();

var_dump($subject_set);

$subjects = [
  ['id' => '1', 'position' => '1', 'visible' => '1', 'menu_name' => 'About Globe Bank'],
  ['id' => '2', 'position' => '2', 'visible' => '1', 'menu_name' => 'Consumer'],
  ['id' => '3', 'position' => '3', 'visible' => '1', 'menu_name' => 'Small Business'],
  ['id' => '4', 'position' => '4', 'visible' => '1', 'menu_name' => 'Commercial'],
];


/*
To facilitate the understanding of what you are doing
you can use variables.
*/

// url query ?var_name=sth
$path_show = url_for('staff/subjects/show.php?id=');
$path_edit = url_for('staff/subjects/edit.php?id=');


?>

<?php $page_title = 'Subjects'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<!--Content area-->
<div id="content">
     <div class="subjects listing">
          <h1>Subjects</h1>

          <div class="actions">
               <a class="action" href="<?php echo url_for("/staff/subjects/new.php");?>">Create New Subject</a>
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
                         <a class="action" href=" <?php echo $path_show.
					u($subject['id']); ?>">View </a>
                    </td>

                    <td><a class="action" href="<?php echo $path_edit . u($subject['id']); ?>">Edit</a>
                    </td>

                    <td><a class="action" href="<?php echo url_for('staff\subjects\show.php') ?>">Delete</a>
                    </td>

               </tr>
               <?php endforeach; ?>
               <!-- END OF For Looop -->

			<?php 
				mysqli_free_result($subject_set);
			?>

          </table>
          <!-- END OF Table -->

     </div>

</div>
<!--END OF Content area-->

<?php include(SHARED_PATH . '/staff_footer.php'); ?>