<?php 
    include_once("../includes/db_config.php");

   $id = $_GET['stid'];

   $sql = "DELETE FROM students WHERE employeeID='$id'";
   $db->query($sql);

   if($db->affected_rows){
     session_start();
        $_SESSION['msg'] = "Successfully Deleted";
   }
  
//print_r($_SESSION);
    

   header("Location:index.php");



?>