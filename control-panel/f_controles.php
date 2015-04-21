<?php

$mensaje = "";  
require_once("class/conexion.php");
include_once("class/controles.php");

	if( (isset($_POST['txtId'], $_POST['txtPeso'], $_POST['txtImc'], $_POST['txtGrasa'], $_POST['txtMusculo'], $_POST['txtPorcentajeAgua'], $_POST['txtGrasaVisceral'], $_POST['txtEdadmetabolica'], $_POST['txtMedidaPecho'], $_POST['txtCircCintura'], $_POST['txtMedidaCadera'], $_POST['txtNotes'], $_POST['txtFecha'], $_POST['txtIdPaciente'] )) ){
		try{
			$control_id = $_POST['txtId'];
			$peso = $_POST['txtPeso'];
			$imc = $_POST['txtImc'];
			$grasa = $_POST['txtGrasa'];
			$musculo = $_POST['txtMusculo'];
			$porcentajeAgua = $_POST['txtPorcentajeAgua'];
			$grasaVisceral = $_POST['txtGrasaVisceral'];
			$edadMetabolica = $_POST['txtEdadmetabolica'];
			$medidaPecho = $_POST['txtMedidaPecho'];
			$circunferenciaCint = $_POST['txtCircCintura'];
			$medidaCadera = $_POST['txtMedidaCadera'];
			$notas = $_POST['txtNotes'];
			$fecha = $_POST['txtFecha'];
			$idPaciente = $_POST['txtIdPaciente'];

			$controles = new controles;
			$controles->insertar($control_id,$peso,$imc,$grasa,$musculo,$porcentajeAgua,$grasaVisceral,$edadMetabolica,$medidaPecho,$circunferenciaCint,$medidaCadera,$notas,$fecha,$idPaciente,$conexion);
			$mensaje = $controles->mensaje;

		}catch(Exception $e){
			$mensaje = $e->GetMessage();
		}

	}

?>

<!DOCTYPE html>
<html lang="en">
	
	<?php include('includes/head.php');  ?>
	
	<body>
	<?php include('includes/header.php');  ?>

	<!-- Main -->
	<div class="container-fluid">
	  
	  <!-- upper section -->
	  <div class="row">
		<?php include('includes/nav.php');  ?>
		<div class="col-sm-9">
			
		  <!-- column 2 -->	
		   <h3><i class="glyphicon glyphicon-dashboard"></i> Agregar Control</h3>  
				
		   <hr>
		  
		   <div class="row">
				
				<section class="Formulario">
					<form method="POST" action="">
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
									<td><label for="lblGrasa">I.M.C</label></td>
									<td><input type="text" name="txtImc"></td>
								</tr>
								<tr>
									<td><label for="lblGrasa">% Grasa:</label></td>
									<td><input type="text" name="txtGrasa"></td>
								</tr>
								<tr>
									<td><label for="lblMusculo">% Musculo:</label></td>
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
									<td><input type="date" name="txtFecha" ></td>
								</tr>
								<tr>
									<td><label for="lblFecha">Id del paciente:</label></td>
									<td><input type="text" name="txtIdPaciente" ></td>
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
		 
		   </div><!--/row-->
		</div><!--/col-span-9-->
		
	  </div><!--/row-->
	  <!-- /upper section -->
	  
	  
	</div><!--/container-->
	<!-- /Main -->

	<footer class="text-center">All Rights Reserved &reg; 2015</footer>

	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>