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
		<h2>Reaction Engineering</h2>
		<a href="bt1.php">click here</a>
		<h2>--------------------------------</h2>
		<h2>Enzyme Technology</h2>
		<a href="bt2.php">click here</a>
		<h2>--------------------------------</h2>
		<h2>Bioinformatics</h2>
		<a href="bt3.php">click here</a>
		<h2>--------------------------------</h2>
		<h2>Genetic Engineering</h2>
		<a href="bt4.php">click here</a>
		<h2>--------------------------------</h2>
		<h2>Bioethics Biosafety and IPR</h2>
		<a href="bt5.php">click here</a>
		<h2>--------------------------------</h2>
	</form>
</body>
</html>