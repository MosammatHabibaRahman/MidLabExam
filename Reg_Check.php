<?php

	if(isset($_REQUEST['signup']))
	{
		$id = $_REQUEST['id'];
		$password = $_REQUEST['password'];
		$password_conf = $_REQUEST['password_conf'];
		$name = $_REQUEST['name'];
		$type = $_REQUEST['user_type'];
		
		if(empty($id || $password || $password_conf || $name || $type))
		{
			echo "Please fill up all fields.";
		}
		else if($password != $password_conf)
		{	
			echo "Passwords must match!";
		}
		else
		{
			$str = $id."|".$password."|".$name."|".$type;
			$file = fopen("Reg_Info.txt", 'a');
			fwrite($file,$str."\r\n");
			fclose($file);

			header("location: Login.php");
		}
	}
?>