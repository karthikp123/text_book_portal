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
		<h2>Database System Models</h2>
		<a href="is1.php">click here</a>
		<h2>--------------------------------</h2>
		<h2>Operating System</h2>
		<a href="is2.php">click here</a>
		<h2>--------------------------------</h2>
		<h2>Data Mining</h2>
		<a href="is3.php">click here</a>
		<h2>--------------------------------</h2>
		<h2>Finite automata and Formal languages</h2>
		<a href="is4.php">click here</a>
		<h2>--------------------------------</h2>
		<h2>Microcontroller and Embedded Systems</h2>
		<a href="is5.php">click here</a>
		<h2>--------------------------------</h2>
	</form>
</body>
</html>