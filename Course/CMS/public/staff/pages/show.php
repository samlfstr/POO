<?php require_once('../../../private/initialize.php');

$id = $_GET['id'] ?? '1';

// first I have to get the result set
$page = get_pages_with_id($id);

$results = mysqli_fetch_row($page);

/*
// $results has only row values and not column
// names uncomment to test it
foreach ($results as $value) {
    echo $value. "<br>";
}
*/

/*
$get_columns = get_clumn_names();
while ($column = mysqli_fetch_assoc($get_columns)){
    $columns[] = $column['COLUMN_NAME'];
}

for ($i=0; $i < count($columns); $i++) {
     echo $columns[$i] . " : " . $results[$i] . "<br>";
}
 */
?>

<?php
/* <a href="show.php?name=.<?php echo urlencode('John Doe'); ?>">Handling Space</a>
<br />
<a href="show.php?name=.<?php echo urlencode('John&Doe'); ?>">Handling & Sign</a>
<br />
<a href="show.php?name=.<?php echo urlencode('!#34John **Doe'); ?>">Crazy Characters</a>
*/
?>

<?php $page_title = 'Staff Menu'; ?>
<?php include(SHARED_PATH . '\staff_header.php') ?>
  <!--Content area-->
  <div id="content">
    <div id="main-menu">
      <button type="button" class="btn btn-light">
        <a class="style-link" href="<?php echo url_for('/staff/pages/index.php'); ?>"> Back to List
        </a>
      </button>
      <h2> <?php echo $results[2]; ?> </h2>

      <div class="attributes">
        <dl>
          <dt>Page Name :&#x20;</dt>
          <dd><?php echo $results[1]; ?></dd>
        </dl>
        <dl>
          <dt>Id :&#x20;</dt>
          <dd><?php echo $results[0]; ?></dd>
        </dl>
        <dl>
          <dt>Position :&#x20;</dt>
          <dd><?php echo $results[2]; ?></dd>
        </dl>
      </div>


    </div>

  </div>
  <!-- END OF Content area-->
<?php include(SHARED_PATH . '\staff_footer.php') ?>