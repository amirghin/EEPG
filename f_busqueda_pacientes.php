<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nutrivital - Pacientes</title>

	<script src="js/jquery-2.1.3.min.js"></script>
	<script src="js/main.js"></script>

    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
	<section class="Formulario busqueda_pacientes">
			<h1>Formulario de Pacientes</h1>	
			<fieldset class="Pacientes">
				<table>
			    	<tr>
				    	<td><label for="lblId">Nombre Paciente: </label></td>
				    	<td><input type="text" name="nombre_paciente" id="nombre_paciente"></td>
			    	</tr>
			    	<tr>
			    		<td class="center" colspan="2">
			    			<input name="buscar_pacientes" type="button" value="Buscar" id="buscar_pacientes">
			    		</td>
			    	</tr>
				</table>
			</fieldset>

		<table id="result">
			
		</table>
	</section>
</body>

</html>
