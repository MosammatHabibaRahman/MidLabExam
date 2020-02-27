<?php
	session_Start();

	if(isset($_REQUEST['login']))
	{
		$user_id = $_REQUEST['user_id'];
		$password = $_REQUEST['password'];
		$file = fopen("Reg_Info.txt",'r');
		
		while(!feof($file))
		{
			$info = fgets($file);
			$data = explode('|',$info);
			$flag = false;

			if($user_id == $data[0] && $password == $data[1])
			{
				$flag = true;

				$_SESSION['user_id'] = trim($data[0]);
				$_SESSION['password'] = trim($data[1]);
				$_SESSION['name'] = trim($data[2]);
				$_SESSION['user_type'] = trim($data[3]);

				if(trim($data[3]) == "Admin")
				{
					header("location: AdminHome.php");
					break;
				}
				else
				{
					header("location: UserHome.php");
					break;
				}
			}
		}

		if($flag == false)
		{
			echo "Invalid User ID or Password."."<br>";
			echo "<a href = "."Register.php".">Register Here</a>";
		}
	}
	else
	{
		header("location: Login.php");
	}
?>