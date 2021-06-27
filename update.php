<?php
  session_start();
?>
<html>
  <head>
      <title>Account Settings</title>
      <link rel = "stylesheet" href = "index.css">
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">
  </head>
  <body>
      <div>
        <p class = "lo"><a href = "logout.php">Logout</a></p>
        <p class = "ho"><a href = "home.php">Home</a></p>
        <p class = "ho"><a href = "del.php">Delete Account</a></p>
      </div>
        <div class = "acc">
                <div class = "c">
											<form class = "form" action = "valid.php" method = "POST">
                        <h2 class = "h2">Update Data</h2>
															<input type = "text" name = "Username" placeholder = "Username" required><br>
                              <input type = "text" name = "NewUsername" placeholder = "New Username" required><br>
                              <input type = "Password" name = "Password" placeholder = "Password" required><br>
                              <input type = "text" name = "Firstname" placeholder = "Firstname" required><br>
                              <input type = "text" name = "Lastname" placeholder = "Lastname" required><br>
                              <input type = "text" name = "Email" placeholder = "Email" required><br>

                              <button type = "submit" name = "update" value = "UPDATE DATA">Update</button>											</form>
								</div>
            </div>
				</body>
</html>
