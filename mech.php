<?php
session_start();
include("function.php"); 
include("connection.php");

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IS</title>
</head>
<body>
	<h1>COURSES</h1>
	<h4>please select the COURSE from which you want the textbook.</h4><br>
	<form>
		<h2>--------------------------------</h2>
		<h2>Fluid Machines</h2>
		<a href="mech1.php">click here</a>
		<h2>--------------------------------</h2>
		<h2>Design of Machine Elements I</h2>
		<a href="mech2.php">click here</a>
		<h2>--------------------------------</h2>
		<h2>Dynamics of Machines</h2>
		<a href="mech3.php">click here</a>
		<h2>--------------------------------</h2>
		<h2>Metrology and Measurement</h2>
		<a href="mech4.php">click here</a>
		<h2>--------------------------------</h2>
		<h2>Industrial Management and Entrepreneurship</h2>
		<a href="mech5.php">click here</a>
		<h2>--------------------------------</h2>
	</form>
</body>
</html>