function EliminarUsuario(id){

	bootbox.confirm("Esta seguro de eliminar este Usuario", 
		function(result){ 
			if(result){
console.log("SE ELIMINARA EL USUARIO");
		$.ajax({
		       type: "POST",
		       url: "../controller/usuarios_controller.php",
		       data: {eliminarUsuario: id,},
		       success: function (data) {
		       	if (data != null) {
		       		console.log("eliminado");
		       		location.reload();
		       	}
		       	else{
		       		console.log("error");
		       	}	
		       }
		   		});
			}else{
				   console.log("NO SE REALIZA NINGUNA ACCION");

			}
		});		 

} 

function EliminarArea(id){

	bootbox.confirm("Esta seguro de eliminar está area", 
		function(result){ 
			if(result){
console.log("SE ELIMINARA EL AREA");
		$.ajax({
		       type: "POST",
		       url: "../controller/listas_controller.php",
		       data: {eliminarArea: id,},
		       success: function (data) {
		       	if (data != null) {
		       		console.log("eliminado");
		       		location.reload();
		       	}
		       	else{
		       		console.log("error");
		       	}	
		       }
		   		});
			}else{
				   console.log("NO SE REALIZA NINGUNA ACCION");

			}
		});		 
} 
// JavaScript Document
function EliminarCategoria(id){

	bootbox.confirm("Esta seguro de eliminar está categoria", 
		function(result){ 
			if(result){
console.log("SE ELIMINARA Esta categoria");
		$.ajax({
		       type: "POST",
		       url: "../controller/listas_controller.php",
		       data: {eliminarCategoria: id,},
		       success: function (data) {
		       	if (data != null) {
		       		console.log("eliminado");
		       		location.reload();
		       	}
		       	else{
		       		console.log("error");
		       	}	
		       }
		   		});
			}else{
				   console.log("NO SE REALIZA NINGUNA ACCION");

			}
		});		 
} 


function EliminarCiudad(id){

	bootbox.confirm("Esta seguro de eliminar está ciudad", 
		function(result){ 
			if(result){
console.log("SE ELIMINARA Esta ciudad");
		$.ajax({
		       type: "POST",
		       url: "../controller/listas_controller.php",
		       data: {eliminarCiudad: id,},
		       success: function (data) {
		       	if (data != null) {
		       		console.log("eliminado");
		       		location.reload();
		       	}
		       	else{
		       		console.log("error");
		       	}	
		       }
		   		});
			}else{
				   console.log("NO SE REALIZA NINGUNA ACCION");

			}
		});		 

} 
function EliminarCliente(id){

	bootbox.confirm("Esta seguro de eliminar este Cliente", 
		function(result){ 
			if(result){
console.log("SE ELIMINARA Este Cliente");
		$.ajax({
		       type: "POST",
		       url: "../controller/listas_controller.php",
		       data: {eliminarCliente: id,},
		       success: function (data) {
		       	if (data != null) {
		       		console.log("eliminado");
		       		location.reload();
		       	}
		       	else{
		       		console.log("error");
		       	}	
		       }
		   		});
			}else{
				   console.log("NO SE REALIZA NINGUNA ACCION");

			}
		});		 

}

function EliminarMedio(id){

	bootbox.confirm("Esta seguro de eliminar este medio", 
		function(result){ 
			if(result){
console.log("SE ELIMINARA Este medio");
		$.ajax({
		       type: "POST",
		       url: "../controller/listas_controller.php",
		       data: {eliminarMedio: id,},
		       success: function (data) {
		       	if (data != null) {
		       		console.log("eliminado");
		       		location.reload();
		       	}
		       	else{
		       		console.log("error");
		       	}	
		       }
		   		});
			}else{
				   console.log("NO SE REALIZA NINGUNA ACCION");

			}
		});		 
}

function EliminarTipoSolicitud(id){

	bootbox.confirm("Esta seguro de eliminar este Tipo Solicitud", 
		function(result){ 
			if(result){
console.log("SE ELIMINARA este Tipo Solicitud");
		$.ajax({
		       type: "POST",
		       url: "../controller/listas_controller.php",
		       data: {eliminarTipoSolicitud: id,},
		       success: function (data) {
		       	if (data != null) {
		       		console.log("eliminado");
		       		location.reload();
		       	}
		       	else{
		       		console.log("error");
		       	}	
		       }
		   		});
			}else{
				   console.log("NO SE REALIZA NINGUNA ACCION");

			}
		});		 

} 
function EliminarVias(id){

	bootbox.confirm("Esta seguro de eliminar esta via", 
		function(result){ 
			if(result){
console.log("SE ELIMINARA Esta via");
		$.ajax({
		       type: "POST",
		       url: "../controller/listas_controller.php",
		       data: {eliminarVias: id,},
		       success: function (data) {
		       	if (data != null) {
		       		console.log("eliminado");
		       		location.reload();
		       	}
		       	else{
		       		console.log("error");
		       	}	
		       }
		   		});
			}else{
				   console.log("NO SE REALIZA NINGUNA ACCION");

			}
		});		 

} 