<?php

  function all_subjects(){
     // $db is not accessible so
     global $db;
       
     $sql = "select * from subjects ";
     $sql .= "order by position asc";
     $result_set = mysqli_query($db, $sql); 
     check_result_set($result_set);
     return $result_set;
  }

  function all_pages(){
     global $db;

     $sql = "select * from pages ";
     $sql .= "order by id asc";
     $result_set = mysqli_query($db, $sql);
     check_result_set($result_set);
     return $result_set;
  }


  function get_subjects_with_id($id){
     // $db is not accessible so
     global $db;
       
     $sql = "select * from subjects ";
     $sql .= "where id='{$id}'";
     $result_set = mysqli_query($db, $sql); 
     check_result_set($result_set);
     return $result_set;
  }

  function get_clumn_names(){

     // $db is not accessible so
     global $db;
       
     $sql = "SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS`WHERE `TABLE_SCHEMA`='globe_bank' AND `TABLE_NAME`='subjects'";
     $result_set = mysqli_query($db, $sql); 
     check_result_set($result_set);
     return $result_set;

  }

  function update_subject($cols){
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

  

