<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit();
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1><strong>WELCOME TO DATABASE CONCEPT (CSC506) ASSIGNMENT</strong></h1>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="about.php"><i class="fas fa-user"></i>About</a>
				<a href="register.php"><i class="fas fa-user"></i>Register</a>
				<a href="logout.php"><i class="fas fa-power-off"></i>Logout</a>
			</div>
		</nav>
<marquee width="80%" direction="left" height="10px"scrollamount="3"><strong><p>Welcome back, <?=$_SESSION['name']?>!</p>
		</div>

</marquee>
		<div class="content">
			<h2>Home Page</h2>
			<p>Welcome back, <?=$_SESSION['name']?>!</p>
		</div>
	</body>
</html>