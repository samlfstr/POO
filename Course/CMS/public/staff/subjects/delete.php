<?php require_once('../../../private/initialize.php');


$id = $_GET['id'] ?? '1';

$result = delete_subject($id);


if ($result) {
    redirect_to(url_for('staff\subjects\index.php'));
} else {
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
}
?>


