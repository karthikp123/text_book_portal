<?php 
session_start();
include("connection.php");
include("function.php");

$user_data=check_login($con);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>BRANCES</h1>
	<h4>please select the branch from which you want the textbook.</h4><br>

	<form>
		<h2>--------------------------------</h2>
		<h2>Information Science</h2>
		<a href="is.php">click here</a>
		<h2>--------------------------------</h2>
		<h2>Computer Science</h2>
		<a href="cs.php">click here</a>
		<h2>--------------------------------</h2>
		<h2>Electronic and Communication</h2>
		<a href="ec.php">click here</a>
		<h2>--------------------------------</h2>
		<h2>Mechanical Engineering</h2>
		<a href="mech.php">click here</a>
		<h2>--------------------------------</h2>
		<h2>Biotechnology</h2>
		<a href="bt.php">click here</a>
		<h2>--------------------------------</h2>
		
	</form>

</body>
</html>
