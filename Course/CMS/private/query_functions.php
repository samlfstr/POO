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
