<?php

	session_Start();
	if(isset($_REQUEST['login']))
	{
		$user_id = $_REQUEST['user_id'];
		$password = $_REQUEST['password'];
		
		$file = fopen("Reg_Info.txt",'r');
		while(!feof($file))
		{
			$info = fread($file,filesize($file));
			$data = explode('|',$info);
			if($user_id == $data[0] && $password == $data[1])
			{
				if($data[3] == "Admin")
				{
					header("location: AdminHome.php");
				}
				else
				{
					header("location: UserHome.php");
				}
			}
			else
			{
				echo "Invalid User Name or Password!";
			}
		}
	}
?>