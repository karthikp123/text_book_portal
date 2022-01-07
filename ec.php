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
		<h2>Analog Communication</h2>
		<a href="ec1.php">click here</a>
		<h2>--------------------------------</h2>
		<h2>Computer Networks</h2>
		<a href="ec2.php">click here</a>
		<h2>--------------------------------</h2>
		<h2>Microprocessor and Microcontroller</h2>
		<a href="ec3.php">click here</a>
		<h2>--------------------------------</h2>
		<h2>VLSI Design</h2>
		<a href="ec4.php">click here</a>
		<h2>--------------------------------</h2>
		<h2>Operations Research</h2>
		<a href="ec5.php">click here</a>
		<h2>--------------------------------</h2>
	</form>
</body>
</html>