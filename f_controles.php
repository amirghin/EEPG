<?php

$mensaje = "";  
require_once("class/conexion.php");
include_once("class/controles.php");

	//if( (isset($_POST['txtId'], $_POST['txtPeso'], $_POST['txtGrasa'], $_POST['txtMusculo'], $_POST['txtPorcentajeAgua'], $_POST['txtGrasaVisceral'], $_POST['txtPesoMeta'], , $_POST['txtEdadmetabolica'], $_POST['txtMedidaPecho'], $_POST['txtCircCintura'], $_POST['txtMedidaCadera'], $_POST['txtNotes'], $_POST['txtFecha'] )) ){
		try{
			$control_id = $_POST['txtId'];
			$peso = $_POST['txtPeso'];
			$grasa = $_POST['txtGrasa'];
			$musculo = $_POST['txtMusculo'];
			$porcentajeAgua = $_POST['txtPorcentajeAgua'];
			$grasaVisceral = $_POST['txtGrasaVisceral'];
			$pesoMeta = $_POST['txtPesoMeta'];
			$edadMetabolica = $_POST['txtEdadmetabolica'];
			$medidaPecho = $_POST['txtMedidaPecho'];
			$circunferenciaCint = $_POST['txtCircCintura'];
			$medidaCadera = $_POST['txtMedidaCadera'];
			$notas = $_POST['txtNotes'];
			$fecha = $_POST['txtFecha'];

			echo $fecha;

		}catch(Exception $e){
				$mensaje = $e->GetMessage();
		}

	//}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nutrivital - Controles</title>

	<script src="js/jquery-2.1.3.min.js"></script>
	<script src="js/jquery-ui-1.11.4/jquery-ui.min.js"></script>
	<script src="js/main.js"></script>

    <link rel="stylesheet" type="text/css" href="css/styles.css">	
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

</head>

<body>
	<section class="Formulario">
		<form method="POST" enctype="multipart/form-data" action="">
			<h1>Formulario de Controles</h1>	
			<fieldset class="controles">
				<table>
			    	<tr>
			    		<td><label for="lblId">Id: </label></td></td>
			    		<td><input type="text" name="txtId"></td>
			    	</tr>
			    	<tr>
				    	<td><label for="lblPeso">Peso: </label></td>
				    	<td><input type="text" name="txtPeso"></td>
					</tr>
			    	<tr>
						<td><label for="lblGrasa">Grasa:</label></td>
						<td><input type="text" name="txtGrasa"></td>
					</tr>
			    	<tr>
						<td><label for="lblMusculo">Musculo:</label></td>
						<td><input type="text" name="txtMusculo"></td>
					</tr>
			    	<tr>
						<td><label for="lblAguaCorporal">Porcentaje de Agua:</label></td>
						<td><input type="text" name="txtPorcentajeAgua"></td>
					</tr>
			    	<tr>
						<td><label for="lblGrasaVisceral">Grasa Visceral:</label></td>
						<td><input type="text" name="txtGrasaVisceral"></td>
					</tr>
			    	<tr>
						<td><label for="lblPesoMeta">Peso Meta:</label></td>
						<td><input type="text" name="txtPesoMeta"></td>
					</tr>
			    	<tr>
						<td><label for="lblEdadMetabolica">Edad Metabolica:</label></td>
						<td><input type="text" name="txtEdadmetabolica"></td>
					</tr>
			    	<tr>
						<td><label for="lblMedidaPecho">Medida del Pecho:</label></td>
						<td><input type="text" name="txtMedidaPecho"></td>
					</tr>
			    	<tr>
						<td><label for="lblCircCintura">Circunferencia de la Cintura:</label></td>
						<td><input type="text" name="txtCircCintura"></td>
					</tr>
			    	<tr>
						<td><label for="lblMedidaCadera">Medida de la Cadera:</label></td>
						<td><input type="text" name="txtMedidaCadera"></td>
					</tr>
			    	<tr>
						<td><label for="lblNotas">Notas:</label></td>
						<td><textarea name="txtNotes"></textarea></td>
					</tr>
			    	<tr>
						<td><label for="lblFecha">Fecha:</label></td>
						<td><input type="text" name="txtFecha" class="fecha"></td>
					</tr>
			    	<tr>
			    		<td class="center" colspan="2"><input name="controlesBtn" type="submit" value="Insertar"></td>
			    	</tr>
			    </div>
				</table>
			</fieldset>
		</form>
	</section>
</body>

</html>
