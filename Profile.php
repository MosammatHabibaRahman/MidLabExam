<?php
	session_start();
	if(!isset($_SESSION['user_id']))
	{
		header("location: Login.php");
	}
	else
	{
		$user_id = $_SESSION['user_id'];
		$name = $_SESSION['name'];
		$type = $_SESSION['user_type'];
	}

?>

<html>
	<head>
		<title>Profile</title>
	</head>
	<body>
		<center>
			<table border = 1 width = 300px>
				<tr>
					<td colspan = 2><center>Profile</center></td>
				</tr>
				<tr>
					<td>ID</td>
					<td><?= $user_id ?></td>
				</tr>
				<tr>
					<td>NAME</td>
					<td><?= $name ?></td>
				</tr>
				<tr>
					<td>USER TYPE</td>
					<td><?= $type ?></td>
				</tr>
				<tr>
					<td colspan = 2>
						<?php
							if($type == "Admin")
							{
								echo "<a href = "."AdminHome.php".">Go Home</a>";
							}
							else
							{
								echo "<a href = "."UserHome.php".">Go Home</a>";
							}
						?>
					</td>
				</tr>
			</table>
		</center>
	</body>
</html>