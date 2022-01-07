<?php
session_start();
include("function.php"); 
include("connection.php");
$query="select *from book,course,author,branch where 	Course_name='Programming in Java' and book.Course_id=course.Course_id and book.Branch_id=branch.Branch_id and book.Author_id=author.Author_id";
$result=mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h2>Database System Models</h2>
	<table border="1px">
		<tr>
			<th>book id</th>
			<th>book name</th>
			<th>edtion</th>
			<th>year</th>
			<th>course</th>
			<th>branch</th>
			<th>author</th>
			<th>download</th>
		</tr>
		<?php while ($row=mysqli_fetch_assoc($result)) {
		?>
		<tr>
			<td><?php echo $row['Book_id'];?></td>
			<td><?php echo $row['Book_name'];?></td>
			<td><?php echo $row['Book_edition'];?></td>
			<td><?php echo $row['Publish_year'];?></td>
			<td><?php echo $row['Course_name'];?></td>
			<td><?php echo $row['Branch_name'];?></td>
			<td><?php echo $row['Author_name'];?></td>
			<td><a href="https://www.google.com/">click here</a></td>
		</tr>
		<?php
		}
		?>
		
	</table>
</body>
</html>