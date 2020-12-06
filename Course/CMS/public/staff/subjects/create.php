<?php

require_once('../../../private/initialize.php');

if (is_post_request()) {

    $cols = [];
    $cols['menu_name'] = $_POST['menu_name'] ?? "";
    $cols['position'] = $_POST['position'] ?? 1;
    $cols['visible'] = $_POST['visible'] ?? 0;

    $result = create_subject($cols);

    if ($result) {
        $new_id = mysqli_insert_id($db);
        redirect_to(url_for('staff/subjects/show.php?id=' . $new_id));
    } else {
        echo mysqli_error($db);
        db_disconnect($db);
        exit;
    }

} else {
    redirect_to(url_for('/staff/subjects/new.php'));
}