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
		<form method="POST" enctype="multipart/form-data" action="">
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
						    	<td><input type="text" name="txtNombre"></td>
					    	</tr>
						    <tr>
								<td><label for="lblApellidos">Apellidos:</label></td>
								<td><input type="text" name="txtApellido"></td>
					    	</tr>
					    	<tr>
								<td><label for="lblFecha">Género</label></td>
								<td>
									<select name="selectGenero">
										<option disabled selected> -- Seleccione un género -- </option>
										<option value="m">Masculino</option>
										<option value="f">Femenino</option>
									</select>
								</td>
					    	</tr>
					    	<tr>
								<td><label for="lblFechaNacimiento">Fecha Nacimiento:</label></td>
								<td><input type="text" name="txtFechaNacimiento"></td>
					    	</tr>
					    	<tr>
								<td><label for="lbltalla">Talla:</label></td>
								<td><input type="text" name="txtTalla"></td>
					    	</tr>
					    	<tr>
								<td><label for="lblPeso">Peso Meta:</label></td>
								<td><input type="text" name="txtPeso"></td>
					    	</tr>
					    	<tr>
								<td><label for="lblCircMuneca">Circunferencia Muñeca:</label></td>
								<td><input type="text" name="txtCircMuneca"></td>
					    	</tr>
					    	<tr>
								<td><label for="lblAntecendetes">Antecedentes Personales:</label></td>
								<td><textarea name="txtAntecedentes"></textarea></td>
					    	</tr>
					    	<tr>
								<td><label for="lblPadecimientos">Padecimientos Familiares:</label></td>
								<td><textarea name="txtPadecimientos"></textarea></td>
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
						    	<td><input type="text" name="txtUser"></td>
					    	</tr>
					    	<tr>
						    	<td><label for="lblPass">Password: </label></td>
						    	<td><input type="text" name="txtPass"></td>
					    	</tr>
					    	<tr>
								<td><label for="lblEmail">Email:</label></td>
								<td><input type="text" name="txtEmail"></td>
					    	</tr>
					    	<tr>
					    		<td class="center" colspan="2"><input name="pacientesBtn" type="submit" value="Insertar"></td>
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
