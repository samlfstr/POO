<?php require_once('../../../private/initialize.php'); ?>
<?php

/*
 * This is what we call seeding =)
*/

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

$path = url_for('staff\subjects\show.php?id=');


?>

<?php $page_title = 'Subjects'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<!--Content area-->
<div id="content">
 <div class="subjects listing">
	<h1>Subjects</h1>

	<div class="actions">
	 <a class="action" href="">Create New Subject</a>
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
				<a class="action" href=" <?php echo $path.
					$subject['id']; ?>">View </a>
			 </td>

			 <td><a class="action"
							href="<?php echo url_for('staff\subjects\show.php') ?>">Edit</a>
			 </td>

			 <td><a class="action" href="<?php echo url_for('staff\subjects\show.php') ?>">Delete</a>
			 </td>

			</tr>
     <?php endforeach; ?>
	 <!-- END OF For Looop -->

	</table>
	<!-- END OF Table -->

 </div>

</div>
<!--END OF Content area-->

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
