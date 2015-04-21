<?php

class controles{

public $control_id;
public $peso;
public $grasa;
public $musculo;
public $porcentajeAgua;
public $grasaVisceral;
public $edadMetabolica;
public $medidaPecho;
public $circunferenciaCint;
public $medidaCadera;
public $notas;
public $fecha;
public $imc;
public $idPaciente;


	function insertar($control_id, $peso, $grasa, $imc, $musculo, $porcentajeAgua, $grasaVisceral, $edadMetabolica, $medidaPecho, $circunferenciaCint, $medidaCadera, $notas, $fecha, $idPaciente, $conexion){
		$mensaje = "";	
		try{
			$insert = "INSERT INTO controles (
				controles_id, 
				controles_peso, 
				controles_imc, 
				controles_porc_grasa, 
				porc_musculo, 
				controles_porc_agua, 
				controles_porc_grasa_visc, 
				controles_edad_metab, 
				controles_med_pecho, 
				controles_circ_cintura, 
				controles_med_cadera, 
				controles_notas, 
				controles_fecha, 
				pacientes_id
				) values (
				{$control_id}, 
				{$peso}, 
				{$imc}, 
				{$grasa},
				{$musculo},
				{$porcentajeAgua},
				{$grasaVisceral},
				{$edadMetabolica},
				{$medidaPecho},
				{$circunferenciaCint},
				'{$medidaCadera}',
				'{$notas}',
				'{$fecha}',
				{$idPaciente})";

			$resultado = mysqli_query($conexion, $insert);
			if(!$resultado){

				throw new Exception(mysqli_error($conexion));

				//return false;
			}else{
				$this->mensaje = "insercion satisfactoria";
				
			}

		}catch(Exception $e){
	    	throw new Exception($e->getMessage());	 

		}
	}

	function buscar_control($id_paciente, $conexion){
		try{
			
			$query = "SELECT * FROM controles WHERE pacientes_id = {$id_paciente}";
			$resultado = mysqli_query($conexion, $query);
			$array = array();
			if(!$resultado){
				throw new Exception(mysqli_error($resultado));	
			}elseif(mysqli_num_rows($resultado) == 0){

				throw new Exception("No se encontraron registros para el paciente con el ID: {$id_paciente}", 1);
				
			}else{
				while($row=mysqli_fetch_assoc($resultado)){
				$array[] = $row;

				}
				return 	'{"controles":'.json_encode($array).'}';

			}

		}catch (Exception $e){
			  return json_encode(array(
			  'error' => array(	
			  	'msg' => $e->GetMessage(),
			  	'error' => $e->GetCode()
			  	)
			  ));
		}
	}

	function eliminar_control($control, $conexion) {

		try{
			$query = "DELETE FROM controles WHERE controles_id = {$control}";
			$resultado = mysqli_query($conexion, $query);

			if(!$resultado){

				throw new Exception(mysqli_error($resultado));	
			}else{
				return '{"delete":"true"}';
			}
				
			

		}catch (Exception $e){
			  return json_encode(array(
			  'error' => array(	
			  	'msg' => $e->GetMessage(),
			  	'error' => $e->GetCode(),
			  	)
			  ));
		}


	}	
    
    function modificar_control($control_id, $peso, $grasa, $imc, $musculo, $porcentajeAgua, $grasaVisceral, $edadMetabolica, $medidaPecho, $circunferenciaCint, $medidaCadera, $notas, $fecha, $idPaciente, $conexion){
        $mensaje = "";
        try{
            $query = "update controles set
                    controles_peso = {$peso}, 
                    controles_imc = {$imc}, 
                    controles_porc_grasa = {$grasa}, 
                    porc_musculo = {$musculo}, 
                    controles_porc_agua = {$porcentajeAgua}, 
                    controles_porc_grasa_visc = {$grasaVisceral}, 
                    controles_edad_metab = {$edadMetabolica}, 
                    controles_med_pecho = {$medidaPecho}, 
                    controles_circ_cintura = {$circunferenciaCint}, 
                    controles_med_cadera = '{$medidaCadera}', 
                    controles_notas = '{$notas}', 
                    controles_fecha = '{$fecha}', 
                     where controles_id = {$control_id}";
            echo $query;
            
            $resultado = mysqli_query($conexion, $query);
            if (!$resultado)
            {
             throw new Exception(mysql_error()); 
            }
            $this->mensaje = 'El registro se actualizó correctamente';
            return $resultado;
          }catch(Exception $e){
             throw new Exception($e->getMessage());

          }
        

    
    }

}

?>