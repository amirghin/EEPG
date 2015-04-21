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
		   <h3><i class="glyphicon glyphicon-dashboard"></i> Buscar Pacientes</h3>  
				
		   <hr>
		  
		   <div class="row">
				
				<section class="Formulario busqueda_pacientes">	
						<fieldset class="Pacientes">
							<table>
								<tr>
									<td><label for="lblId">Nombre Paciente: </label></td>
									<td><input type="text" name="nombre_paciente" id="nombre_paciente"></td>
									<td class="center" colspan="2">
										<input name="buscar_pacientes" type="button" value="Buscar" id="buscar_pacientes">
									</td>
								</tr>
							</table>
						</fieldset>

					<table id="result">
						
					</table>
				</section>
				
				<table id="result" class="tableResult">
					
				</table>
		 
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