<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/main.js" type="text/javascript"></script>
</head>
<body>
	<section class="Formulario">
		<form name="login" action="" method="post">
			<h1>Login</h1>
			<table>
				<tr>
					<td><label>Username</label></td>
					<td><input type="text" name="username" id="username"></td>
				</tr>
				<tr>
					<td><label>Password</label></td>
					<td><input type="password" name="password" id="password"></td>
				</tr>
				<tr>
					<td class="center" colspan="2"><input name="loginBtn" type="button" value="Login" onclick="prueba();"></td>
				</tr>
			</ul>
		</form>
	</section>
</body>
</html>
