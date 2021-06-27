<?php
  session_start();
  header('location:index.php');

  $con = mysqli_connect("localhost", "root", "");

  mysqli_select_db($con, 'newtable');

  $d = "DELETE FROM 'userreg' where Username = '$_SESSION[Username]'";
  $data = mysqli_query($con, $query);

  if($data){
    echo "<font color = 'green'>Record deleted from DataBase";

  }
  else{
    echo "<font color ='red'>Failed to delete Record from Database";
  }
 ?>
