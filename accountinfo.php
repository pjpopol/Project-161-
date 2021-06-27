<?php
  session_start();
 ?>

 <html>
    <head>
      <title>Account info</title>
      <link rel = "stylesheet" href = "index.css">
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">
    </head>
    <body>
      <div class = "account">

        <p class = "lo"><a href = "logout.php">Logout</a></p>
        <p class = "ho"><a href = "home.php">Home</a></p>
        <p class = "ac"><a href = "update.php">Update Account</a></p>
          <div class = "">
            <form class = "c">
              <p><?php echo $_SESSION['Username'] ?></p>
              <p><?php echo $_SESSION['Firstname'] ?></p>
              <p><?php echo $_SESSION['Lastname'] ?></p>
              <p><?php echo $_SESSION['Email'] ?></p>
            </form>
          </div>
      </div>
    </body>
 </html>
