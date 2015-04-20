
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nutrivital - Controles</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script src="js/jquery-2.1.3.min.js"></script>
	<script src="js/main.js"></script>
</head>

<body>
	<section class="estilos_form">
		<form method="POST" enctype="multipart/form-data" action="">		
			<fieldset class="controles">
				<div class="filas">
			    	<label for="lblId">Id: </label>
			    	<input type="text" name="txtId">
				</div>
				<div class="filas">	
			    	<label for="lblPeso">Peso: </label>
			    	<input type="text" name="txtPeso">
			    </div>
				<div class="filas">
					<label for="lblGrasa">Grasa:</label>
					<input type="text" name="txtGrasa">
				</div>
				<div class="filas">
					<label for="lblMusculo">Musculo:</label>
					<input type="text" name="txtMusculo">
				</div>
				<div class="filas">
					<label for="lblAguaCorporal">Agua Corporal:</label>
					<input type="text" name="txtAguaCorporal">
				</div>
				<div class="filas">
					<label for="lblGrasaVisceral">Grasa Visceral:</label>
					<input type="text" name="txtGrasaVisceral">
				</div>
				<div class="filas">
					<label for="lblPesoMeta">Peso Meta:</label>
					<input type="text" name="txtPesoMeta">
				</div>
				<div class="filas">
					<label for="lblEdadMetabolica">Edad Metabolica:</label>
					<input type="text" name="txtEdadmetabolica">
				</div>
				<div class="filas">
					<label for="lblMedidaPecho">Medida del Pecho:</label>
					<input type="text" name="txtMedidaPecho">
				</div>
				<div class="filas">
					<label for="lblCircCintura">Circunferencia de la Cintura:</label>
					<input type="text" name="txtCircCintura">
				</div>
				<div class="filas">
					<label for="lblMedidaCadera">Medida de la Cadera:</label>
					<input type="text" name="txtMedidaCadera">
				</div>
				<div class="filas">
					<label for="lblNotas">Notas:</label>
					<textarea name="txtNotes"></textarea>
				</div>
				<div class="filas">
					<label for="lblFecha">Fecha:</label>
					<input type="text" name="txtFecha">
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
