<?php
session_start();


/*if(isset($_SESSION["active_user"])){

	header ("Location: f_controles.php");

}*/

if(isset($_POST["aut_user"], $_POST["user_rol"])){

	$_SESSION["active_user"] = $_POST["aut_user"];
	$_SESSION["active_user_rol"] = $_POST["user_rol"];
	header ("Location: f_controles.php");
}

?>

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
		<form name="f_login" id="f_login" action="" method="POST" enctype="multipart/form-data">
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
					<td class="center" colspan="2"><input name="loginBtn" id="loginBtn" type="button" value="Login"></td>
				</tr>
			</ul>
		</form>
	</section>
</body>
</html>
