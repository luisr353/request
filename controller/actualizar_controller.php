<?php
//Obtenemos las variables metodo $_POST
$numeroticket = $_POST['ticket']; 
$observacionesticket = $_POST['observacionesticket'];
$respuestaticket = $_POST['respuestaticket'];
$usuario = $_POST['usuario'];
  
# Incluimos la clase Solicitud
require_once('../model/solicitudes_model.php');

        # Creamos un objeto de la clase Ticket
        $ticket = new Ticket();

        # Llamamos al metodo nuevoTicket para validar los datos en la base de datos
        $ticket -> actualizarTicket($numeroticket, $respuestaticket, $observacionesticket, $usuario);


?>