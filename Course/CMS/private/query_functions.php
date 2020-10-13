<?php

  function all_subjects(){
     // $db is not accessible so
     global $db;
       
     $sql = "SELECT * FROM subjects ";
     $sql .= "ORDER BY position ASC";
     $result = mysqli_query($db, $sql);
     return $result;
  }