<?php require_once('../../../private/initialize.php');


$id = $_GET['id'] ?? '1';

$result = delete_page($id);


if ($result) {
    redirect_to(url_for('staff\pages\index.php'));
} else {
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
}
?>