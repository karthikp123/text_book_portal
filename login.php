<?php 
session_start();

include("connection.php");
include("function.php");

if($_SERVER['REQUEST_METHOD']=="POST")
{
	$user_name=$_POST['user_name'];
	$password=$_POST['password'];

	if(!empty($user_name) && !empty($password))
	{
		$query="select *from user where User_name='$user_name' limit 1";
		$result=mysqli_query($con,$query);

		if($result)
		{
			if($result && mysqli_num_rows($result)>0)
			{
				$user_data=mysqli_fetch_assoc($result);

				if($user_data['Password']===$password)
				{
					$_SESSION['user_id']=$user_data['User_id'];
					header("Location:index.php");
					Die;
				}
				
			}
			echo "Please enter the vallid User Name or Password";
		}
		

	}else { 
		echo "Please Enter some Value";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
</head>
<body>
	<h2>Please Login to Continue</h2>
	<form method="post">
		<label>User Name</label>
		<input type="text" name="user_name"><br><br>
		<label>Password</label>
		<input type="Password" name="password"><br><br>
		<input type="submit" value="login"><br><br>
	</form>
	<a href="signup.php">Create an Account</a>
</body>
</html>