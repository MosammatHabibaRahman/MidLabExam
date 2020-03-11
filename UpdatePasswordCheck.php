<?php
	session_start();
	if(isset($_REQUEST['change']))
	{
		$lines = file("Reg_Info.txt");
		$data = array();
		foreach($lines as $l);
		{
			array_push($data,explode('|',$l));
		}
	
		$actualpassword = trim($_SESSION['password']);
		$id = trim($_SESSION['user_id']);
		
		
		$lineno = 0;
		for($i=0; $i<count($data); $i++)
		{
			if($id == $i[0])
			{
				$lineno = $i;
			}
		}
		echo $lineno;
		
		$old = $_REQUEST['current'];
		$new = $_REQUEST['password'];
		$new_conf = $_REQUEST['password_conf'];
		
		if(empty(trim($old)) || empty(trim($new)) || empty(trim($new_conf)))
		{
			echo "Fields cannot be empty!<br>";
			echo "<a href="."ChangePassword.php".">Back</a>";
		}
		else if($old != $actualpassword)
		{
			echo "Invalid Current Password!<br>";
			echo "<a href="."ChangePassword.php".">Back</a>";
		}
		else if($new != $new_conf)
		{
			echo "New Password and Re-Type new password fields must match!<br>";
			echo "<a href="."ChangePassword.php.".">Back</a>";
		}
	}
?>