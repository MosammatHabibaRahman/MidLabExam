<html>
	<head>
		<title>View Users</title>
	</head>
</html>

<?php
	session_start();
	if(!isset($_SESSION['user_id']) || $_SESSION['user_type'] != "Admin")
	{
		header("location: Login.php");
	}
	else
	{
		$user_id = $_SESSION['user_id'];
		$name = $_SESSION['name'];
		$type = $_SESSION['user_type'];

		$file = file("Reg_Info.txt");
		$data = array();

		foreach($file as $i)
		{
			array_push($data,explode('|',$i));
		}

		$table="<center>
				<table border = 1 width = 400px>
				<tr>
				<td colspan = 3><center>Users</center></td>
				</tr>
				<tr>
				<td><center>ID</center></td>
				<td><center>NAME</center></td>
				<td><center>USER TYPE</center></td>
				</tr>";
	
		foreach($data as $v)
		{
		$table .= 	"<tr>
					<td><center>".$v[0]."</center></td>
					<td><center>".$v[2]."</center></td>
					<td><center>".$v[3]."</center></td>
					</tr>";
		}

		$table .= 	"<tr>
					<td colspan = 3><a href = "."AdminHome.php".">Go Home</a></td>
					</tr>
					</table>
					</center>";

		echo $table;
	}
?>