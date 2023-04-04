<?php
session_start(); // start session

// check if user is logged in
if(isset($_SESSION['username'])) {
	$username = $_SESSION['username'];
}
else {
	// user is not logged in, redirect to login page
	header("Location: index.php");
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<h2>Welcome <?php echo $username; ?></h2>
	<a href="logout.php">Logout</a>
</body>
</html>
