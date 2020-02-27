<!--localhost:8080/MidLabExam/Login.php -->
<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		<form method = "POST" action = "Log_Check.php">
			<fieldset>
				<legend>LOGIN</legend>
				User Id <br>
				<input type = "text" name = "user_id" value = ""> <br>
				Password <br>
				<input type = "password" name = "password" value = ""> <br>
				<hr>
				<input type = "submit" name = "login" value = "Login"> 
				<a href = "Register.php"><u>Register</u></a>
			</fieldset>
		</form>
	</body>
</html>