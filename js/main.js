function busqueda_paciente(){
    var buscar = $("#nombre_paciente").val();

    if (buscar!=""){
        var busqueda = $.ajax({
            url: "class/busqueda_pacientes.php", // PHP que se ejecuta en el click del boton
            type: "POST",
            data: {nombre_paciente:buscar}, //Datos que se envian al PHP por medio del POST
        });
        busqueda.done(function(response){
            var object = jQuery.parseJSON(response);
            console.log(object);
            var table = "<tr><td>Nombre</td><td>Apellido</td><td>Nombre de usuario</td></tr>";
            var tableValues = "";
            $.each(object.usuarios, function(key,value){
                tableValues += "<tr><td>"+value.pacientes_nombre+"</td><td>"+value.pacientes_apellido+"</td><td>"+value.nom_usuario+"</td><td> <input type='button' value='Eliminar'/> </td> <td> <input type='button' value='Modificar'/> </td></tr>";
                
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

    /**** BTN TAB USUARIO *****/
    $(".nextTab").click(function(){
        $('.tabUsuario').tab('show');
    });
    
    
})