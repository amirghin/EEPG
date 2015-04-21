<?php

$mensaje = "";
if( $_GET["txtId"] == "" || $_GET["txtPeso"] == ""|| $_GET["txtGrasa"] == ""||$_GET["txtImc"] == ""|| $_GET["txtMusculo"]== ""|| $_GET["txtPorcentajeAgua"]== ""|| $_GET["txtGrasaVisceral"]== ""||$_GET["txtEdadmetabolica"]== ""|| $_GET["txtMedidaPecho"]== ""|| $_GET["txtCircCintura"]== ""||$_GET["txtMedidaCadera"]== ""|| $_GET["txtNotes"]== ""|| $_GET["txtFecha"]== ""|| $_GET["txtIdPaciente"]== "" ){
    echo "en blanco";
    $id_control = $_GET["id_control"];
    $id_paciente = $_GET["id_paciente"];
    $peso = $_GET["peso"];
    $imc = $_GET["imc"];
    $grasa=$_GET["grasa"];
    $musculo=$_GET["musculo"];
    $agua=$_GET["agua"];
    $grasa_visceral=$_GET["grasa_visceral"];
    $edad_meta=$_GET["edad_meta"];
    $pecho=$_GET["pecho"];
    $cintura=$_GET["cintura"];
    $cadera=$_GET["cadera"];
    $nota=$_GET["nota"];
    $fecha=$_GET["fecha"];
}else
{
        echo "no en blanco";
    $id_control = $_GET["txtId"];
    $id_paciente = $_GET["txtIdPaciente"];
    $peso = $_GET["txtPeso"];
    $imc = $_GET["txtImc"];
    $grasa=$_GET["txtGrasa"];
    $musculo=$_GET["txtMusculo"];
    $agua=$_GET["txtPorcentajeAgua"];
    $grasa_visceral=$_GET["txtGrasaVisceral"];
    $edad_meta=$_GET["txtEdadmetabolica"];
    $pecho=$_GET["txtMedidaPecho"];
    $cintura=$_GET["txtCircCintura"];
    $cadera=$_GET["txtMedidaCadera"];
    $nota=$_GET["txtNotes"];
    $fecha=$_GET["txtFecha"]; 
 
}

require "class/conexion.php";
require "class/controles.php";

try{
    $control = new controles;
    $control->modificar_control($_GET["txtId"], $_GET["txtPeso"], $_GET["txtGrasa"], $_GET["txtImc"], $_GET["txtMusculo"],          $_GET["txtPorcentajeAgua"], $_GET["txtGrasaVisceral"], $_GET["txtEdadmetabolica"], $_GET["txtMedidaPecho"], $_GET["txtCircCintura"], $_GET["txtMedidaCadera"], $_GET["txtNotes"], $_GET["txtFecha"], $_GET["txtIdPaciente"], $conexion);
    
    
    $mensaje = $control->mensaje;
    
 
    
   
}catch(Exception $e){
    $mensaje = $e->GetMessage();
}

//print_r($_GET);

//$parts = parse_url($url);
//echo $id_paciente;

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nutrivital - Controles</title>

	<script src="js/jquery-2.1.3.min.js"></script>
	<script src="js/main.js"></script>

    <link rel="stylesheet" type="text/css" href="css/styles.css">	

</head>

<body>
	<section class="Formulario">
		<form method="GET" action="">
			<h1>Formulario de Controles</h1>	
			<fieldset class="controles">
				<table>
			    	<tr>
			    		<td><label for="lblId">Id: </label></td></td>
			    		<td><input type="text" name="txtId" value="<?php echo $id_paciente?>" readonly></td>
			    	</tr>
			    	<tr>
				    	<td><label for="lblPeso">Peso: </label></td>
				    	<td><input type="text" name="txtPeso" value="<?php echo $peso?>"></td>
					</tr>
			    	<tr>
						<td><label for="lblGrasa">I.M.C</label></td>
						<td><input type="text" name="txtImc" value="<?php echo $imc?>"></td>
					</tr>
			    	<tr>
						<td><label for="lblGrasa">% Grasa:</label></td>
						<td><input type="text" name="txtGrasa" value="<?php echo $grasa?>"></td>
					</tr>
			    	<tr>
						<td><label for="lblMusculo">% Musculo:</label></td>
						<td><input type="text" name="txtMusculo" value="<?php echo $musculo?>"></td>
					</tr>
			    	<tr>
						<td><label for="lblAguaCorporal">Porcentaje de Agua:</label></td>
						<td><input type="text" name="txtPorcentajeAgua" value="<?php echo $agua?>"></td>
					</tr>
			    	<tr>
						<td><label for="lblGrasaVisceral">Grasa Visceral:</label></td>
						<td><input type="text" name="txtGrasaVisceral" value="<?php echo $grasa_visceral?>"></td>
					</tr>
			    	<tr>
						<td><label for="lblEdadMetabolica">Edad Metabolica:</label></td>
						<td><input type="text" name="txtEdadmetabolica" value="<?php echo $edad_meta?>"></td>
					</tr>
			    	<tr>
						<td><label for="lblMedidaPecho">Medida del Pecho:</label></td>
						<td><input type="text" name="txtMedidaPecho" value="<?php echo $pecho?>"></td>
					</tr>
			    	<tr>
						<td><label for="lblCircCintura">Circunferencia de la Cintura:</label></td>
						<td><input type="text" name="txtCircCintura" value="<?php echo $cintura?>"></td>
					</tr>
			    	<tr>
						<td><label for="lblMedidaCadera">Medida de la Cadera:</label></td>
						<td><input type="text" name="txtMedidaCadera" value="<?php echo $cadera?>"></td>
					</tr>
			    	<tr>
						<td><label for="lblNotas">Notas:</label></td>
						<td><textarea name="txtNotes"><?php echo $nota?></textarea></td>
					</tr>
			    	<tr>
						<td><label for="lblFecha">Fecha:</label></td>
						<td><input type="date" name="txtFecha" value="<?php echo $fecha?>"></td>
					</tr>
			    	<tr>
						<td><label for="lblFecha">Id del paciente:</label></td>
						<td><input type="text" name="txtIdPaciente" value="<?php echo $id_paciente?>" readonly></td>
					</tr>
			    	<tr>
			    		<td class="center" colspan="2"><input name="controlesBtn" type="submit" value="Insertar"></td>
			    	</tr>
			    	<tr>
			    		<td class="center" colspan="2"><?php echo $mensaje; ?></td>

			    	</tr>
			    </div>
				</table>
			</fieldset>
		</form>
	</section>
</body>

</html>
