<?php

  function all_subjects(){
     // $db is not accessible so
     global $db;
       
     $sql = "select * from subjects ";
     $sql .= "order by position asc";
     return mysqli_query($db, $sql);
  }

  function delete_subject($id){
     global $db;

     $sql = "delete from subjects where id={$id}";
     mysqli_query($db,$sql);

     return mysqli_affected_rows($db);
  }