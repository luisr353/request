<?php
//Obtenemos las variables metodo $_POST
$horainicio = $_POST['horainicio'];
$viascontacto = $_POST['vias'];
$cedula = $_POST['cedula'];
$nombre1 = $_POST['nombre1'];
$nombre2 = $_POST['nombre2'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$consecutivo = "";
$nombrecompleto = $nombre1." ".$nombre2." ".$apellido1." ".$apellido2;
$telefono = $_POST['telefono'];
$correo = $_POST['email'];
$cliente = $_POST['cliente'];
$ciudad = $_POST['ciudad'];
$razonsocial = $_POST['razonsocial'];
$estadotrabajador = $_POST['estadotrabajador'];
$tiposolicitud = $_POST['tiposolicitud'];
$categoriasolicitud = $_POST['categoriasolicitud'];
$area = $_POST['area'];
$tiposervicio = $_POST['tiposervicio'];
$solicitud = $_POST['solicitud'];
$fechaentrega = $_POST['fechaentrega'];
$medioentrega = $_POST['medioentrega'];
$observacionesticket = $_POST['observacionesticket'];
$respuestaticket = $_POST['respuestaticket'];
$usuario = $_POST['usuario'];

if($respuestasticket == "") {

	$estadosolicitud = "ABIERTA";
}	
else {
	$estadosolicitud = "CERRADA";
}
  
# Incluimos la clase Solicitud
require_once('../model/solicitudes_model.php');

        # Creamos un objeto de la clase Ticket
        $ticket = new Ticket();

        # Llamamos al metodo nuevoTicket para validar los datos en la base de datos
        $ticket -> nuevoTicket($horainicio, $viascontacto, $cedula, $consecutivo, $nombrecompleto, $telefono, $correo, $cliente, $ciudad, $razonsocial, $estadotrabajador, $tiposolicitud, $categoriasolicitud, $area, $tiposervicio, $solicitud, $fechaentrega, $medioentrega, $observacionesticket, $respuestaticket, $estadosolicitud, $usuario);


?>
