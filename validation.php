<?php
   session_start();

   $con = mysqli_connect("localhost" , "root", "");

   mysqli_select_db($con, 'test');

   $user = $_POST['Username'];
   $pass = $_POST['Password'];
   $email = $_POST['Email'];
   $fn = $_POST['Firstname'];
   $ln = $_POST['Lastname'];
   $s = " select * from newtable where Username = '$user' && Password = '$pass'";

   $result = mysqli_query($con, $s);

   $num = mysqli_num_rows($result);

   if($num == 1){
     $_SESSION['Username'] = $user;
     $_SESSION['Firstname'] = $fn;
     $_SESSION['Lastname'] = $ln;
     $_SESSION['Email'] = $email;
     header('location:home.php');
   }
   else{
     header('location:index.php');
   }
?>
