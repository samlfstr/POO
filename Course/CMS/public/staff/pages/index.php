<?php require_once('../../../private/initialize.php'); ?>

<?php include(SHARED_PATH . '/staff_header.php'); ?>

<?php

$pages = [
 ['id' => 1, 'path' => "public/index.php"],
 ['id' => 2, 'path' => "Staff/index.php"],
 ['id' => 3, 'path' => "Staff/Pages/index.php"],
 ['id' => 4, 'path' => "Staff/Subject/index.php"],
 ['id' => 5, 'path' => "Staff/Subject/show.php"],
];

$path = url_for('staff/pages/show.php?id=');

?>

 <!--Content area-->
 <div id="content">

	<table class="table">
	 <thead>
	 <tr>
		<th> Pages</th>
		<th> Path</th>
	 </tr>
	 </thead>
	 <tbody>
   <?php foreach ($pages as $page) : ?>
		<tr onclick="document.location.href='<?php echo $path.$page['id']; ?> '"
				class="list-group-item-action">
		 <td>
       <?php echo $page['id']; ?>
		 </td>
		 <td>
       <?php echo $page['path']; ?>
		 </td>

		</tr>

   <?php endforeach; ?>
	 </tbody>
	</table>

 </div>
 <!--END OF Content area-->

<?php include(SHARED_PATH . '/staff_footer.php'); ?>