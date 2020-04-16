<?php
class respuestas_model extends Conexion
  {

    public function get_respuestas()
	{
		parent::conectar();
		 $consulta=parent::query("SELECT s.id, s.ticket, DATE_FORMAT(s.fechasolicitud, '%M %d %Y') AS fecha, s.cedula, s.telefono, s.correo, s.estadotrabajador, s.nombrecompleto, s.solicitud, t.tipo, s.tiposolicitud, s.estadosolicitud, s.razonsocial, s.ciudad, s.medioentrega, e.medios, s.fechaentrega, s.observacionesticket, s.estadotrabajador, s.respuestaticket, s.area, c.cliente, m.ciudadempresa FROM solicitudes s INNER JOIN tiposolicitud t ON s.tiposolicitud = t.idsolicitud INNER JOIN clientes c ON s.cliente = c.idcliente INNER JOIN ciudades m ON s.ciudad = m.idciudades INNER JOIN mediosentrega e ON s.medioentrega = e.idmedios INNER JOIN areas a ON s.area = a.idareas WHERE estadosolicitud = 'ABIERTA' ORDER BY s.ticket ASC");
        
        while($filas=$consulta->fetch_assoc()){
            $this->respuestas[]=$filas;
        }
        return $this->respuestas;
    }
	
}
?>

