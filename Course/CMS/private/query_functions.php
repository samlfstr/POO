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