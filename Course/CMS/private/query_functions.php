<?php

  function all_subjects(){
     // $db is not accessible so
     global $db;
       
     $sql = "select * from subjects ";
     $sql .= "order by position asc";
     return mysqli_query($db, $sql);
  }