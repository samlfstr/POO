<?php require_once ('../../../private/initialize.php');

$id = $_GET['id'] ?? '1';

echo h($id);

?>

<?php 
/* <a href="show.php?name=.<?php echo urlencode('John Doe'); ?>">Handling Space</a>
<br/>
<a href="show.php?name=.<?php echo urlencode('John&Doe'); ?>">Handling & Sign</a>
<br/>
<a href="show.php?name=.<?php echo urlencode('!#34John **Doe'); ?>">Crazy Characters</a>
 */
?>