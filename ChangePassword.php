<?php
	session_start();
	if(!isset($_SESSION['user_id']))
	{
		header("location: Login.php");
	}
	
	$usertype = trim($_SESSION['user_type']);
	if($usertype == "Admin")
	{
		$link = "AdminHome.php";
	}
	else
	{
		$link = "UserHome.php";
	}
?>

<html>
	<head>
		<title>Change Password</title>
	</head>
	<body>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<form method = "POST" action = "UpdatePasswordCheck.php">
			<center>
				<fieldset style="width:350px">
					<legend>Change Password</legend>
					Current Password <br>
					<input type = "password" name = "current" value = ""> <br>
					New Password <br>
					<input type = "password" name = "password" value = ""> <br>
					Re-Type New Password <br>
					<input type = "password" name = "password_conf" value = ""> <br>
					<hr>
					<input type = "submit" name = "change" value = "Change"> 
					<a href = <?=$link?>><u>Home</u></a>
				</fieldset>
			</center>
		</form>
	</body>
</html>