<?php

 	session_start();

  if(!isset($_SESSION['Username'])){
    header('location:index.php');
  }
 ?>

<html>
	<head>
			<title>Homepage</title>
			<link rel = "stylesheet" href = "index.css">
			<meta name = "viewport" content = "width = device-width, initial-scale = 1">
	</head>

	<body>
			<p class = "ac"><a href = "accountinfo.php">Account Info</a></p>
				<p class = "m"><b>JINS DIGITAL PRINT HOUSE</b> is your one-stop online printing shop. Offering a vast selection of capabilities and solutions that makes your ideas turn into reality. Our primary goal is guaranteeing that we produce excellent project results.</p>

        <p class = "m2">With the fierce and rapidly evolving marketing strategies, JINS DIGITAL PRINT HOUSE pursue its promise to meet its clients expectations, deliver quality prints at the most reasonable price through constant refinement of processes, people and technology.
</p>
        <p class = "JIN"><b>JINS DIGITAL</b></p>
        <p class = "dig"><b>PRINT HOUSE</b></p>
        <p class = "m3">The right partner for your printing and media needs</p>
			</div>
	</body>
</html>
