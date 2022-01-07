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
		<h2>Programming in Java</h2>
		<a href="cs1.php">click here</a>
		<h2>--------------------------------</h2>
		<h2>Database Management System</h2>
		<a href="cs2.php">click here</a>
		<h2>--------------------------------</h2>
		<h2>Operating System</h2>
		<a href="cs3.php">click here</a>
		<h2>--------------------------------</h2>
		<h2>Engineering Management</h2>
		<a href="cs4.php">click here</a>
		<h2>--------------------------------</h2>
	</form>
</body>
</html>