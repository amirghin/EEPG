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
            var table = "<tr><td>Id Paciente</td><td>Nombre</td><td>Apellido</td><td>Genero</td><td>Fecha Ingreso</td><td>Fecha nacimiento</td> <td>Talla</td><td>Peso Meta</td><td>Circunferencia de la muneca</td><td>Antecedentes personales</td> <td>Padecimientos familiares</td> <td>Nombre usuario</td>  <td>Modificar</td> <td>Eliminar</td></tr> ";
            var tableValues = "";
            $.each(object.pacientes, function(key,value){  // funcion para recorrer el objeto JSON parseado

                tableValues += "<tr><td>"+value.pacientes_id+"</td><td>"+value.pacientes_nombre+"</td><td>"+value.pacientes_apellidos+"</td><td>"+value.pacientes_genero+"</td> <td>"+value.pacientes_fecha+"</td> <td>"+value.pacientes_fecha_nac+"</td> <td>"+value.pacientes_talla+"</td> <td>"+value.pacientes_peso_meta+"</td> <td>"+value.pacientes_circ_muneca+"</td> <td>"+value.pacientes_ant_personales+"</td> <td>"+value.pacientes_padec_familiares+"</td><td>"+value.usuarios_nombre+"</td><td> <input type='button' value='Eliminar'/> </td> <td> <input type='button' value='Modificar'/> </td><td><input type='hidden' value="+ value.pacientes_id+"></td></tr>";
            });
            $("#result").html(table+tableValues);
        });
        busqueda.error(function(error){
            alert("error");
        });

    }
}


function verificar_login(){

    var username = $("#username").val();
    var password = $("#password").val(); 
    if( username != "" && password != ""){

        var buscar_usuario = $.ajax({
        url: "busquedas/inicio_sesion.php", // PHP que se ejecuta en el click del boton
        type: "POST",
        data: {nombre_paciente:buscar}, //Datos que se envian al PHP por medio del POST
        });
    }

}


$(document).ready(function(){

	$("#buscar_pacientes").on("click", function(){
		busqueda_paciente();
	});

    $('.busqueda_pacientes').keyup(function(e) {
        if(e.keyCode == 13) {
            busqueda_paciente();
        }
    });   

    /**** BTN TAB USUARIO *****/
    $(".nextTab").click(function(){
        $('.tabUsuario').tab('show');
    });
    
    $("#loginBtn").on("click", function(){

        verificar_login();
    });
    
})