<?php 

$dbhost="localhost";
$dbuser="root";
$dbpassword="";
$dbname="text_book_portal";

if(!$con=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname))
{
	die("connection not occured.");
}

?>