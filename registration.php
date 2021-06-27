<?php
   session_start();
   header('location:index.php');

   $con = mysqli_connect("localhost" , "root", "");

   mysqli_select_db($con, 'test');

   $fn    =   $_POST['Firstname'];
   $ln    = $_POST['Lastname'];
   $user  = $_POST['Username'];
   $email = $_POST['Email'];

   $s = " select * from newtable where Username = '$user'";

   $result = mysqli_query($con, $s);

   $num = mysqli_num_rows($result);

   if($num == 1){
   				echo "Username already Taken";
   }
   else{
   				$reg = " insert into newtable(FirstName, LastName, Username, Password, Email)
           values ('$fn' , '$ln' , '$user' , '$pass' , '$email')";
         mysqli_query($con, $reg);
         $_SESSION['Username'] = $user;
         $_SESSION['Firstname'] = $fn;
         $_SESSION['Lastname'] = $ln;
         $_SESSION['Email'] = $email;
   }
?>
