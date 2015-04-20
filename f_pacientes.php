
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nutrivital - Usuarios</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script src="js/jquery-2.1.3.min.js"></script>
	<script src="js/main.js"></script>
</head>

<body>
	<section class="estilos_form">
		<form method="POST" enctype="multipart/form-data" action="">		
			<fieldset class="pacientes">
				<div class="filas">
			    	<label for="lblId">Id: </label>
			    	<input type="text" name="txtId" id="id_pelicula">
				</div>
				<div class="filas">	
			    	<label for="lblNombre">Nombre: </label>
			    	<input type="text" name="txtNombre" id="nombre_pelicula">
			    </div>
				<div class="filas">
					<label for="lblApellidos">Apellidos:</label>
					<input type="text" name="txtApellido">
				</div>
				<div class="filas">
					<label for="lblFecha">Fecha:</label>
					<input type="text" name="txtFecha">
				</div>
				<div class="filas">
					<label for="lblFechaNacimiento">Fecha Nacimiento:</label>
					<input type="text" name="txtFechaNacimiento">
				</div>
				<div class="filas">
					<label for="lbltalla">Talla:</label>
					<input type="text" name="txtTalla">
				</div>
				<div class="filas">
					<label for="lblPeso">Peso Meta:</label>
					<input type="text" name="txtPeso">
				</div>
				<div class="filas">
					<label for="lblCircMuneca">Circ Muñeca:</label>
					<input type="text" name="txtCircMuneca">
				</div>
				<div class="filas">
					<label for="lblAntecendetes">Antecedentes Personales:</label>
					<textarea name="txtAntecedentes"></textarea>
				</div>
				<div class="filas">
					<label for="lblPadecimientos">Padecimientos Familiares:</label>
					<textarea name="txtPadecimientos"></textarea>
				</div>

				<!-- USUARIO -->
				<div class="filas">
			    	<label for="lblUser">Usuario: </label>
			    	<input type="text" name="txtUser">
				</div>
				<div class="filas">	
			    	<label for="lblPass">Password: </label>
			    	<input type="text" name="txtPass">
			    </div>
				<div class="filas">
					<label for="lblEmail">Email:</label>
					<input type="text" name="txtEmail">
				</div>
				<div class="filas">
					<label for="role">Role :</label>
					<select name="selectRole">
						<option value="0">None</option>
						<option value="1">1</option>
					</select>
				</div>

				<div class="filas">
			    	<input type="button" value="Insertar" class="button" id="crear_peliculas">
			    	<input type="hidden" name="action" value="upload" /> 
			    </div>
			</fieldset>
		</form>
	</section>
</body>

</html>
