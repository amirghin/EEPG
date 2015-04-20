function busqueda_paciente(){
    var buscar = $("#nombre_paciente").val();

    if (buscar!=""){
        var busqueda = $.ajax({
            url: "busquedas/busqueda_pacientes.php", // PHP que se ejecuta en el click del boton
            type: "POST",
            data: {nombre_paciente:buscar}, //Datos que se envian al PHP por medio del POST
        });
        busqueda.done(function(response){
            var object = jQuery.parseJSON(response);
            //console.log(response);
            var table = "<tr><td>Nombre</td><td>Apellido</td><td>Genero</td><td>Fecha Ingreso</td><td>Fecha nacimiento</td> <td>Talla</td><td>Peso Meta</td><td>Circunferencia de la muneca</td><td>Antecedentes personales</td> <td>Padecimientos familiares</td> <td>Nombre usuario</td>  <td>Modificar</td> <td>Eliminar</td></tr> ";
            var tableValues = "";
            $.each(object.pacientes, function(key,value){

                tableValues += "<tr><td>"+value.pacientes_nombre+"</td><td>"+value.pacientes_apellidos+"</td><td>"+value.pacientes_genero+"</td> <td>"+value.pacientes_fecha+"</td> <td>"+value.pacientes_fecha_nac+"</td> <td>"+value.pacientes_talla+"</td> <td>"+value.pacientes_peso_meta+"</td> <td>"+value.pacientes_circ_muneca+"</td> <td>"+value.pacientes_ant_personales+"</td> <td>"+value.pacientes_padec_familiares+"</td><td>"+value.usuarios_nombre+"</td><td> <input type='button' value='Eliminar'/> </td> <td> <input type='button' value='Modificar'/> </td></tr>";
            });
            $("#result").html(table+tableValues);
        });
        busqueda.error(function(error){
            alert("error");
        });

    }
}

function busqueda_Control(){
    var buscar = $("#id_paciente").val();

    if (buscar!=""){
        var busqueda = $.ajax({
            url: "busquedas/busqueda_control.php", // PHP que se ejecuta en el click del boton
            type: "POST",
            data: {id_paciente:buscar}, //Datos que se envian al PHP por medio del POST
        });
        busqueda.done(function(response){
            var object = jQuery.parseJSON(response);
            //console.log(response);
            var table = "<tr><td>Peso</td><td>IMC</td><td>Grasa</td><td>Musculo</td><td>Agua</td><td>Grasa Visceral</td><td>Edad Metabolica</td><td>Pecho</td><td>Circunferencia Cintura</td><td>Cadera</td><td>Notas</td><td>Fecha</td><td>Modificar</td><td>Eliminar</td></tr>";
            var tableValues = "";
            $.each(object.controles, function(key,value){

                tableValues += "<tr><td>"+value.controles_peso+"</td><td>"+value.controles_imc+"</td><td>"+value.controles_porc_grasa+"</td><td>"+value.porc_musculo+"</td><td>"+value.controles_porc_agua+"</td><td>"+value.controles_porc_grasa_visc+"</td><td>"+value.controles_edad_metab+"</td><td>"+value.controles_med_pecho+"</td><td>"+value.controles_circ_cintura+"</td><td>"+value.controles_med_cadera+"</td><td>"+value.controles_notas+"</td><td>"+value.controles_fecha+"</td><td><input type='button' value='Modificar'/></td><td><input type='button' value='Eliminar'/></td></tr>";
            });
            $("#result").html(table+tableValues);
        });
        busqueda.error(function(error){
            alert("error");
        });

    }
}

$(document).ready(function(){

	$("#buscar_pacientes").on("click", function(){
		busqueda_paciente();
	})

    $('.busqueda_pacientes').keyup(function(e) {
        if(e.keyCode == 13) {
            busqueda_paciente();
        }
    });   


	$("#buscar_control").on("click", function(){
		busqueda_Control();
	})

    $('.buscar_control').keyup(function(e) {
        if(e.keyCode == 13) {
            busqueda_Control();
        }
    });   

    /**** BTN TAB USUARIO *****/
    $(".nextTab").click(function(){
        $('.tabUsuario').tab('show');
    });
    
    
})