<html>
  <head>
    <title>
      Login|Register
    </title>
    <link rel = "stylesheet" href = "index.css">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1">
  </head>
  <body>
    <div class = "Login-page">
    <div class = "form">
      <div class = "col-md-6">
       <form class = "Register" method = "post" action = "registration.php">
       <h2 class = "h2">Register</h2>
       <input type = "text" placeholder = "First Name" name = "Firstname" required/>
       <input type = "text" placeholder = "Last Name" name = "Lastname  " required/>
       <input type = "text" placeholder = "Username" name = "Username" required/>
       <input type = "password" placeholder = "Password" name = "Password" required/>
       <input type = "email" placeholder="E-mail" name = "Email" required/><span class = "req"></span>
       <button type = "submit" name = "register" class = "btn btn-primary"> Register</button>
       <p class = "message">Already Registered? <a href = "#"> Login</a></p>
       </form>
</div>
<div class = "col-md-6">
       <form class = "login-form" action = "validation.php" method = "post">
       	<h2 class = "h2">Login</h2>
         <input type = "username" placeholder="Username" name = "Username" required>
         <input type = "password" placeholder="Password" name = "Password" = required>
         <button type = "submit" class = "btn btn-primary"><a href = "home.php">Login</a></button>
         <p class = "message">New User? <a href = "#"> Register</a></p>
       </form>
     </div>
   </div>

   <p class = "JDPH"><b>JINS DIGITAL PRINT HOUSE</b></p>
   <script src = 'https://code.jquery.com/jquery-3.2.1.min.js'></script>

<script>
   $('.message a').click(function(){
     $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
   });
</script>
    </form>
  </body>
</html>
