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
		   <h3><i class="glyphicon glyphicon-dashboard"></i> Buscar Control</h3>  
				
		   <hr>
		  
		   <div class="row">
				
				<section class="Formulario busqueda_control">
					<fieldset class="Control">
						<table>
							<tr>
								<td><label for="lblId">Id Paciente: </label></td>
								<td><input type="text" name="id_paciente" id="id_paciente"></td>
								<td class="center" colspan="2">
									<input name="buscar_control" type="button" value="Buscar" id="buscar_control">
								</td>
							</tr>
						</table>
					</fieldset>
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