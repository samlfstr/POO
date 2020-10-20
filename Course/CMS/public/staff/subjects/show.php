<?php require_once ('../../../private/initialize.php');

$id = $_GET['id'] ?? '1';

$subject = get_subjects_with_id($id);
$results = mysqli_fetch_row($subject);

$get_columns = get_clumn_names();
while ($column = mysqli_fetch_assoc($get_columns)){
    $columns[] = $column['COLUMN_NAME'];
}

for ($i=0; $i < count($columns); $i++) { 
     echo $columns[$i] . " : " . $results[$i] . "<br>";
}

?>

<?php 
/* <a href="show.php?name=.<?php echo urlencode('John Doe'); ?>">Handling Space</a>
<br/>
<a href="show.php?name=.<?php echo urlencode('John&Doe'); ?>">Handling & Sign</a>
<br/>
<a href="show.php?name=.<?php echo urlencode('!#34John **Doe'); ?>">Crazy Characters</a>
 */
?>