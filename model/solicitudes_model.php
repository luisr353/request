<?php
require_once("../db/db.php");

class solicitudes_model extends Conexion
{ 
    public function get_solicitudes()
		{
      parent::conectar();
		
		 $consulta=parent::query("SELECT s.id, s.ticket, DATE_FORMAT(s.fechasolicitud, '%M %d %Y') AS fecha, s.cedula, s.telefono, s.correo, s.estadotrabajador, s.nombrecompleto, s.solicitud, t.tipo, s.tiposolicitud, s.estadosolicitud, s.razonsocial, s.ciudad, s.medioentrega, e.medios, s.fechaentrega, s.observacionesticket, s.respuestaticket, s.estadotrabajador, c.cliente, m.ciudadempresa FROM solicitudes s INNER JOIN tiposolicitud t ON s.tiposolicitud = t.idsolicitud INNER JOIN clientes c ON s.cliente = c.idcliente INNER JOIN ciudades m ON s.ciudad = m.idciudades INNER JOIN mediosentrega e ON s.medioentrega = e.idmedios ORDER BY s.ticket DESC");
	
		while($filas=$consulta->fetch_assoc()){
            $this->solicitudes[]=$filas;
        }
        return $this->solicitudes;
		parent::cerrar();
		}
}


class Ticket extends Conexion
  {

    public function nuevoTicket($horainicio, $viascontacto, $cedula, $consecutivo, $nombrecompleto, $telefono, $correo, $cliente, $ciudad, $razonsocial, $estadotrabajador, $tiposolicitud, $categoriasolicitud, $area, $tiposervicio, $solicitud, $fechaentrega, $medioentrega, $observacionesticket, $respuestaticket, $estadosolicitud, $usuario)
    {
      parent::conectar();

        $nuevo=parent::query("INSERT INTO solicitudes (id, fechasolicitud, ticket, horainicio, viascontacto, cedula, nombrecompleto, telefono, correo, cliente, ciudad, razonsocial, estadotrabajador, tiposolicitud, categoriasolicitud, area, tiposervicio, solicitud, fechaentrega, medioentrega, observacionesticket, respuestaticket, estadosolicitud, usuario) VALUES ('NULL', CURRENT_TIME(), '', '$horainicio', '$viascontacto', '$cedula', '$nombrecompleto', '$telefono', '$correo', '$cliente', '$ciudad', '$razonsocial', '$estadotrabajador', '$tiposolicitud', '$categoriasolicitud', '$area', '$tiposervicio', '$solicitud', '$fechaentrega', '$medioentrega', '$observacionesticket', '$respuestaticket', '$estadosolicitud', '$usuario')");
		parent::cerrar();

      }
	  
	 public function actualizarTicket($numeroticket, $respuestaticket, $observacionesticket, $estadosolicitud)
	 {
		 parent::conectar();
		 
		 if ($observacionesticket == "" && $respuestaticket == ""){}
		 	elseif ($observacionesticket != "" && $respuestaticket == "") {
				$estadosolicitud= "ABIERTA";							
			} elseif ($observacionesticket != "" && $respuestaticket != "") { 
				$estadosolicitud= "CERRADA";			
			}
		 
		$actualizar=parent::query("UPDATE solicitudes SET respuestaticket='$respuestaticket', observacionesticket='$observacionesticket', estadosolicitud='$estadosolicitud' WHERE ticket = '$numeroticket'");
		 
		 parent::cerrar();
	
	 }
	    
 }
?>