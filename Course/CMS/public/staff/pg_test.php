<?php require_once('../../private/initialize.php'); ?>

<?php

$result = pg_query($pg, "SELECT * FROM public.pair_numbers");

while ($row = pg_fetch_row($result)) {
    $arr[] = $row;
}

?>
<?php foreach ($arr as $arr_s) : ?>s
  <p style="margin-right: auto; margin-left: auto; text-align: center;"> <?php echo $arr_s[1]; ?></p>
<?php endforeach; ?>


