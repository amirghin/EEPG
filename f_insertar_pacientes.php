<?php

require "class/conexion.php";
require "class/usuarios.php";
require "class/pacientes.php";

$usuario = new usuarios;
$paciente = new pacientes;

if(isset($_POST['i_txtUser'], $_POST['i_txtPass'], $_POST['i_txtEmail'])){
	$insertar_usuario = $usuario->insertar_usuario($conexion, $_POST['i_txtUser'], $_POST['i_txtPass'], $_POST['i_txtEmail']);
	if($insertar_usuario){

		$insertar_paciente = $paciente->insertar_paciente($conexion, $_POST['i_txtNombre'], $_POST['i_txtApellido'], $_POST['i_selectGenero'],
								$_POST['i_txtFechaNacimiento'],$_POST['i_txtTalla'], $_POST['i_txtPesoMeta'], $_POST['i_txtCircMuneca'],
								$_POST['i_txtAntecedentes'], $_POST['i_txtPadecimientos'], $_POST['i_txtUser']);
	}
}

echo $paciente->mensaje;
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nutrivital - Pacientes</title>

	<script src="js/jquery-2.1.3.min.js"></script>
	<script src="js/main.js"></script>

    <link rel="stylesheet" type="text/css" href="css/styles.css">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/bootstrap.js"></script>

</head>

<body>
	<section class="Formulario">
		<form method="POST" enctype="multipart/form-data" action="" id="i_pacientes" name="i_pacientes">
			<h1>Formulario de Pacientes</h1>
			<div role="tabpanel">

			  <!-- Nav tabs -->
			  <ul class="nav nav-tabs" role="tablist">
			    <li role="presentation" class="active"><a href="#Paciente" aria-controls="Paciente" role="tab" data-toggle="tab">Paciente</a></li>
			    <li role="presentation"><a class="tabUsuario" href="#Usuario" aria-controls="Usuario" role="tab" data-toggle="tab">Usuario</a></li>
			  </ul>

			  <!-- Tab panes -->
			  <div class="tab-content">
			    <div role="tabpanel" class="tab-pane active" id="Paciente">

					<fieldset class="Pacientes">
						<table>
					    	<tr>
						    	<td><label for="lblNombre">Nombre: </label></td>
						    	<td><input type="text" name="i_txtNombre" id="i_txtNombre"></td>
					    	</tr>
						    <tr>
								<td><label for="lblApellidos">Apellidos:</label></td>
								<td><input type="text" name="i_txtApellido" id="i_txtApellido"></td>
					    	</tr>
					    	<tr>
								<td><label for="lblFecha">Género</label></td>
								<td>
									<select name="i_selectGenero" id="i_selectGenero">
										<option disabled selected> -- Seleccione un género -- </option>
										<option value="m">Masculino</option>
										<option value="f">Femenino</option>
									</select>
								</td>
					    	</tr>
					    	<tr>
								<td><label for="lblFechaNacimiento">Fecha Nacimiento:</label></td>
								<td><input type="date" name="i_txtFechaNacimiento" id="i_txtFechaNacimiento"></td>
					    	</tr>
					    	<tr>
								<td><label for="lbltalla">Talla (cm):</label></td>
								<td><input type="number" name="i_txtTalla" id="i_txtTalla" min="0" step="any"></td>
					    	</tr>
					    	<tr>
								<td><label for="lblPeso">Peso Meta (kg):</label></td>
								<td><input type="number" name="i_txtPesoMeta" id="i_txtPesoMeta" min="0" step="any"></td>
					    	</tr>
					    	<tr>
								<td><label for="lblCircMuneca">Circunferencia Muñeca (cm):</label></td>
								<td><input type="number" name="i_txtCircMuneca" id="i_txtCircMuneca" min="0" step="any"></td>
					    	</tr>
					    	<tr>
								<td><label for="lblAntecendetes">Antecedentes Personales:</label></td>
								<td><textarea name="i_txtAntecedentes" id="i_txtAntecedentes"></textarea></td>
					    	</tr>
					    	<tr>
								<td><label for="lblPadecimientos">Padecimientos Familiares:</label></td>
								<td><textarea name="i_txtPadecimientos" id="i_txtPadecimientos"></textarea></td>
					    	</tr>
					    	<tr>
					    		<td class="center" colspan="2"><a class="nextTab" href="javascript:void(0);">Tab Usuario</a></td>
					    	</tr>
						</table>
					</fieldset>

			    </div>
			    <div role="tabpanel" class="tab-pane" id="Usuario">

					<fieldset class="Pacientes">
						<table>
					    	<tr>
						    	<td><label for="lblUser">Usuario: </label></td>
						    	<td><input type="text" name="i_txtUser" id="i_txtUser" required></td>
					    	</tr>
					    	<tr>
						    	<td><label for="lblPass">Password: </label></td>
						    	<td><input type="text" name="i_txtPass" id="i_txtPass" required></td>
					    	</tr>
					    	<tr>
								<td><label for="lblEmail">Email:</label></td>
								<td><input type="email" name="i_txtEmail" id="i_txtEmail"></td>
					    	</tr>
					    	<tr>
					    		<td class="center" colspan="2"><input name="i_pacientesBtn" id="i_pacientesBtn" type="button" value="Insertar"></td>
					    	</tr>
						</table>
					</fieldset>
			
			    </div>
			  </div>

			</div>

		</form>
	</section>
</body>

</html>
