<?php
	session_start();
	if(!isset($_SESSION['user_id']) || $_SESSION['user_type'] != "User")
	{
		header("location: Login.php");
	}
?>

<html>
	<head>
		<title>User Home Page</title>
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
		<center>
			<table border = 1 width = 400px >
				<tr>
					<td>
						<center>
							<h1>Welcome <?= $_SESSION['name']?>!</h1><br>
							<a href = "Profile.php"><u>Profile</u></a><br>
							<a href = "ChangePassword.php"><u>Change Password</u></a><br>
							<a href = "Logout.php"><u>Logout</u></a><br>
							<br>
							<br>
						</center>
					</td>
				</tr>
			</table>
		<center>
	</body>
</html>