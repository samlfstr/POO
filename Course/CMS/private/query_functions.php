<?php

function all_subjects()
{
    // $db is not accessible so
    global $db;

    $sql = "select * from subjects ";
    $sql .= "order by position asc";
    $result_set = mysqli_query($db, $sql);
    check_result_set($result_set);
    return $result_set;
}

function all_pages()
{
    global $db;

    $sql = "select * from pages ";
    $sql .= "order by id asc";
    $result_set = mysqli_query($db, $sql);
    check_result_set($result_set);
    return $result_set;
}


function get_subjects_with_id($id)
{
    // $db is not accessible so
    global $db;

    $sql = "select * from subjects ";
    $sql .= "where id='{$id}'";
    $result_set = mysqli_query($db, $sql);
    check_result_set($result_set);
    return $result_set;
}

function get_clumn_names()
{

    // $db is not accessible so
    global $db;

    $sql = "SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS`WHERE `TABLE_SCHEMA`='globe_bank' AND `TABLE_NAME`='subjects'";
    $result_set = mysqli_query($db, $sql);
    check_result_set($result_set);
    return $result_set;

}

function update_subject($cols)
{
    global $db;

    $sql_query = "Update subjects Set ";
    $sql_query .= "menu_name='" . $cols['menu_name'] . "', ";
    $sql_query .= "position='" . $cols['position'] . "', ";
    $sql_query .= "visible='" . $cols['visible'] . "' ";
    $sql_query .= "Where id='" . $cols['id'] . "'";

    $result_set = mysqli_query($db, $sql_query);
    check_result_set($result_set);
    return $result_set;
}

function create_subject($cols)
{
    global $db;

    $sql_query = "insert into subjects ";
    $sql_query .= "(menu_name, position, visible) ";
    $sql_query .= "values (";
    $sql_query .= "'" . $cols['menu_name'] . "',";
    $sql_query .= "'" . $cols['position'] . "',";
    $sql_query .= "'" . $cols['visible'] . "'";
    $sql_query .= ")";

    $result_set = mysqli_query($db, $sql_query);
    check_result_set($result_set);
    return $result_set;
}

function delete_subject($id)
{
    global $db;

    $sql_query = "delete from subjects ";
    $sql_query .= "where id=";
    $sql_query .= "'" . $id . "'";

    $result_set = mysqli_query($db, $sql_query);
    check_result_set($result_set);
    return $result_set;
}


function get_pages_with_id($id)
{
    // $db is not accessible so
    global $db;

    $sql = "select * from pages ";
    $sql .= "where id='{$id}'";
    $result_set = mysqli_query($db, $sql);
    check_result_set($result_set);
    return $result_set;
}

function update_page($cols)
{
    global $db;

    $sql_query = "Update pages Set ";
    $sql_query .= "menu_name='" . $cols['menu_name'] . "', ";
    $sql_query .= "position='" . $cols['position'] . "', ";
    $sql_query .= "visible='" . $cols['visible'] . "' ";
    $sql_query .= "Where id='" . $cols['id'] . "'";

    $result_set = mysqli_query($db, $sql_query);
    check_result_set($result_set);
    return $result_set;
}

function delete_page($id)
{
    global $db;

    $sql_query = "delete from pages ";
    $sql_query .= "where id=";
    $sql_query .= "'" . $id . "'";

    $result_set = mysqli_query($db, $sql_query);
    check_result_set($result_set);
    return $result_set;
}

