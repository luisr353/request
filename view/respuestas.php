<?php
header("Content-Type: text/html;charset=utf-8");

  session_start();

  // Validamos que exista una session y ademas que el nivel que exista sea igual a 1 (Administrador)
  if(!isset($_SESSION['nivel']) || $_SESSION['nivel'] < 0){
    /*
      Para redireccionar en php se utiliza header,
      pero al ser datos enviados por cabereza debe ejecutarse
      antes de mostrar cualquier informacion en el DOM es por eso que inserto este
      codigo antes de la estructura del html, espero haber sido claro
    */	  
    header('location: ../index.php');
  	}

	require "../model/fechaCastellano.php";
	require_once("../db/db.php");
	require_once("../controller/respuestas_controller.php");
?>

<?php include "inc/header.php"?> 

  <body style="background-color:#f7f8f9;">
   
  <?php include "inc/cabecera.php"?>   

<div class="main-content">
	<div class="sesionactiva">
	  <h1>Respuesta solicitudes</h1>	
	</div>

<div class="container">           
  <table width="76%" class="table table-hover" style="font-size: 12px;">
    <thead>
      <tr>
        <th width="3%">No.</th>
        <th width="6%">Ticket</th>
        <th width="7%">Fecha</th>
        <th width="9%">Documento</th>
        <th width="12%">Nombre Completo</th>
        <th width="15%">Cliente</th>
        <th width="11%">Tipo de Solicitud</th>
        <th width="17%">Solicitud</th>
        <th width="6%">Estado</th>
        <th width="14%">Acción</th>
      </tr>
    </thead>
    
    <?php 
		$numero=1;
		foreach ($respuestas as $respuesta) { ?>
  <!-- Creamos la tabla y listamos el resultado de la consulta,le agregamos el botón de actualizar -->     
    <tr>
    <td><?php echo $numero++ ;?></td>  
    <td><?php echo $respuesta["ticket"];?></td>  
    <td><?php echo fechaCastellano($respuesta["fecha"]);?></td>
    <td><?php echo $respuesta["cedula"];?></td>
    <td><?php echo $respuesta["nombrecompleto"];?></td>
    <td><?php echo $respuesta["cliente"];?></td>
    <td><?php echo $respuesta["tipo"];?></td>
    <td><?php echo $respuesta["solicitud"];?></td>
    <td><?php echo $respuesta["estadosolicitud"];?></td>
       
	<td style="text-align: center">
	
	<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-ticket="<?php echo $respuesta["ticket"];?>" data-cedula="<?php echo $respuesta["cedula"];?>" data-fecha="<?php echo $respuesta["fecha"];?>" data-nombre="<?php echo $respuesta["nombrecompleto"];?>" data-tipo="<?php echo $respuesta["tipo"];?>" data-solicitud="<?php echo $respuesta["solicitud"];?>" data-estado="<?php echo $respuesta["estadosolicitud"];?>" data-telefono="<?php echo $respuesta["telefono"];?>" data-email="<?php echo $respuesta["correo"];?>" data-empresa="<?php echo $respuesta["razonsocial"];?>" data-cliente="<?php echo $respuesta["cliente"];?>" data-ciudad="<?php echo $respuesta["ciudadempresa"];?>" data-medioentrega="<?php echo $respuesta["medios"];?>" data-fechaentrega="<?php echo $respuesta["fechaentrega"];?>" data-observacionesticket="<?php echo $respuesta["observacionesticket"];?>" data-respuestaticket="<?php echo $respuesta["respuestaticket"];?>" data-estadotrabajador="<?php echo $respuesta["estadotrabajador"];?>">Responder</button>	
						
	<?php } ?>
     </tr>     
      </tbody>
  </table>
  <?php include "inc/mverdatos.php";?>
 
</div>


    <!-- Llamar los javascript-->
     <script src="../js/doSearch.js"></script>
    <script src="../js/hora.js"></script>
    <script src="../js/vermodal.js"></script>
    <script src="../js/actualizarTicket.js"></script>
     <!-- Jquery -->
     
    <?php include "inc/footer.php"?>  