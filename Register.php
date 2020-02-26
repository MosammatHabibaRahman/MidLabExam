<html>
	<head>
		<title>Register</title>
	</head>
	<body>
		<form method = "POST" action = "Reg_Check.php">
			<fieldset>
				<legend>REGISTRATION</legend>
				Id <br>
				<input type = "text" name = "id" value = ""> <br>
				Password <br>
				<input type = "password" name = "password" value = ""> <br>
				Confirm Password <br>
				<input type = "password" name = "password_conf" value = ""> <br>
				Name <br>
				<input type = "text" name = "name" value = ""> <br>
				User Type <br>
				<hr>
				<input type = "radio" name = "user_type" value = "User"> User
				<input type = "radio" name = "user_type" value = "Admin"> Admin <br>
				<hr>
				<input type = "submit" name = "signup" value = "Sign Up"> 
				<a href = "Login.php"><u>Sign In</u></a>
			</fieldset>
		</form>
	</body>
</html>