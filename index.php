<?php
require "class/conexion.php";
?>
 
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<section class="Formulario">
		<form name="login" action="" method="post">
			<h1>Login</h1>
			<table>
				<tr>
					<td><label>Username</label></td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td><label>Password</label></td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td class="center" colspan="2"><input name="loginBtn" type="button" value="Login" onclick="prueba();"></td>
				</tr>
			</ul>
		</form>
	</section>
</body>
</html>
