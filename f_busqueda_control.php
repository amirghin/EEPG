<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nutrivital - Control</title>

	<script src="js/jquery-2.1.3.min.js"></script>
	<script src="js/main.js"></script>

    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
	<section class="Formulario busqueda_control">
			<h1>Formulario de Control</h1>	
			<fieldset class="Control">
				<table>
			    	<tr>
				    	<td><label for="lblId">Id Paciente: </label></td>
				    	<td><input type="text" name="id_paciente" id="id_paciente"></td>
			    	</tr>
			    	<tr>
			    		<td class="center" colspan="2">
			    			<input name="buscar_control" type="button" value="Buscar" id="buscar_control">
			    		</td>
			    	</tr>
				</table>
			</fieldset>
		<table id="result">
			
		</table>
	</section>
</body>

</html>
