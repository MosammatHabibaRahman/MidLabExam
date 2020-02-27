<?php
	session_start();
	if(!isset($_SESSION['user_id']))
	{
		header("location: Login.php");
	}
?>

<html>
	<head>
		<title>Change Password</title>
	</head>
	<body>
		<form method = "POST" action = "Reg_Check.php">
			<fieldset>
				<legend>Change Password</legend>
				Current Password <br>
				<input type = "password" name = "current" value = ""> <br>
				New Password <br>
				<input type = "password" name = "password_conf" value = ""> <br>
				Re-Type New Password <br>
				<input type = "password" name = "password_conf" value = ""> <br>
				<hr>
				<input type = "submit" name = "change" value = "Change"> 
				<a href = "AdminHome.php"><u>Home</u></a>
			</fieldset>
		</form>
	</body>
</html>