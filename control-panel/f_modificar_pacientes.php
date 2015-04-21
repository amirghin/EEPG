<?php

require "class/conexion.php";
require "class/usuarios.php";
require "class/pacientes.php";
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
		   <h3><i class="glyphicon glyphicon-dashboard"></i> Modificar Pacientes</h3>  
				
		   <hr>
		  
		   <div class="row">
				
				<section class="Formulario">
					<form method="POST" enctype="multipart/form-data" action="" id="m_pacientes" name="m_pacientes">
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
											<td><input type="text" name="m_txtNombre" id="m_txtNombre"></td>
										</tr>
										<tr>
											<td><label for="lblApellidos">Apellidos:</label></td>
											<td><input type="text" name="m_txtApellido" id="m_txtApellido"></td>
										</tr>
										<tr>
											<td><label for="lblFecha">Género</label></td>
											<td>
												<select name="m_selectGenero" id="m_selectGenero">
													<option disabled selected> -- Seleccione un género -- </option>
													<option value="m">Masculino</option>
													<option value="f">Femenino</option>
												</select>
											</td>
										</tr>
										<tr>
											<td><label for="lblFechaNacimiento">Fecha Nacimiento:</label></td>
											<td><input type="date" name="m_txtFechaNacimiento" id="m_txtFechaNacimiento"></td>
										</tr>
										<tr>
											<td><label for="lbltalla">Talla (cm):</label></td>
											<td><input type="number" name="m_txtTalla" id="m_txtTalla" min="0" step="any"></td>
										</tr>
										<tr>
											<td><label for="lblPeso">Peso Meta (kg):</label></td>
											<td><input type="number" name="m_txtPesoMeta" id="m_txtPesoMeta" min="0" step="any"></td>
										</tr>
										<tr>
											<td><label for="lblCircMuneca">Circunferencia Muñeca (cm):</label></td>
											<td><input type="number" name="m_txtCircMuneca" id="m_txtCircMuneca" min="0" step="any"></td>
										</tr>
										<tr>
											<td><label for="lblAntecendetes">Antecedentes Personales:</label></td>
											<td><textarea name="m_txtAntecedentes" id="m_txtAntecedentes"></textarea></td>
										</tr>
										<tr>
											<td><label for="lblPadecimientos">Padecimientos Familiares:</label></td>
											<td><textarea name="m_txtPadecimientos" id="m_txtPadecimientos"></textarea></td>
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
											<td><input type="text" name="m_txtUser" id="m_txtUser" required></td>
										</tr>
										<tr>
											<td><label for="lblPass">Password: </label></td>
											<td><input type="text" name="m_txtPass" id="m_txtPass" required></td>
										</tr>
										<tr>
											<td><label for="lblEmail">Email:</label></td>
											<td><input type="email" name="m_txtEmail" id="m_txtEmail"></td>
										</tr>
										<tr>
											<td class="center" colspan="2"><input name="m_pacientesBtn" id="m_pacientesBtn" type="button" value="Modificar"></td>
										</tr>
									</table>
								</fieldset>
						
							</div>
						  </div>

						</div>

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