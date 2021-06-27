<<?php
  session_start();

  $db = "test";
  $con = mysqli_connect("localhost", "root", "");

  mysqli_select_db($con, $db);
  if(isset($_POST['update'])){
    $ur = $_POST['Username'];

    $up = " UPDATE 'newtable' SET FirstName = '$_POST[Firstname]', LastName = '$_POST[Lastname]', Username = '$_POST[NewUsername]', Password = '$_POST[Password]', Email = '$_POST[Email]' WHERE Username = '$_POST[Username]' ";
    $query_run = mysqli_query($con, $up);

    if($query_run){

      header('location:home.php');
    }
    else{
      header('location:update.php');
    }
  }
 ?>
