<?php
header("Content-Type: text/html;charset=utf-8");

  session_start();

  // Validamos que exista una session y ademas que el nivel que exista sea igual a 1 (Administrador)
  if(!isset($_SESSION['nivel']) || $_SESSION['nivel'] != 1){
    /*
      Para redireccionar en php se utiliza header,
      pero al ser datos enviados por cabereza debe ejecutarse
      antes de mostrar cualquier informacion en el DOM es por eso que inserto este
      codigo antes de la estructura del html, espero haber sido claro
    */
    header('location: ../index.php');
  }
	require_once("../model/fechaCastellano.php");
	require_once("../db/db.php");
	require_once("../controller/solicitudes_controller.php");
	require_once("../controller/listas_controller.php");
?>

<?php include "inc/header.php"?> 

  <body style="background-color:#f7f8f9;">
   
  <?php include "inc/cabecera.php"?>   
   
<div class="main-content">
	<div class="sesionactiva">
	  <h1>Solicitudes</h1>	
	</div>

	<div class="busqueda col-lg-12">
	<form class="navbar-form col-lg-9" role="search"  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Buscar..." id="searchTerm"onkeyup="doSearch()" />
      </div>
    </form>
		<button type="button" name="nticket" class="btn btn-primary pull-right" data-toggle="modal" data-target="#nuevoTicket">Nuevo Ticket</button>
	</div>
	
	<div class="container">
	                               
  <table class="table table-hover" id="datos">
    <thead>
      <tr>
       	<th width="4%">No.</th>
        <th width="6%">Ticket</th>
        <th width="14%">Fecha</th>
        <th width="10%">Documento</th>
        <th width="22%">Nombre Completo</th>
        <th width="15%">Tipo de Solicitud</th>
        <th width="13%">Solicitud</th>
        <th width="9%">Estado</th>
        <th width="7%">Acción</th>
      </tr>
    </thead>
    <tbody> 
    
    <?php 
		$numero=1;
		foreach ($datos as $dato) { ?>
  <!-- Creamos la tabla y listamos el resultado de la consulta,le agregamos el botón de actualizar -->     
     <tr>
    <td><?php echo $numero++ ;?></td>  
    <td><?php echo $dato["ticket"];?></td>  
    <td><?php echo fechaCastellano($dato["fecha"]);?></td>
    <td><?php echo $dato["cedula"];?></td>
    <td><?php echo $dato["nombrecompleto"];?></td>
    <td><?php echo $dato["tipo"];?></td>
    <td><?php echo $dato["solicitud"];?></td>
    <td><?php echo $dato["estadosolicitud"];?></td>
       
	<td style="text-align: center">
						
	<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-ticket="<?php echo $dato["ticket"];?>" data-cedula="<?php echo $dato["cedula"];?>" data-fecha="<?php echo $dato["fecha"];?>" data-nombre="<?php echo $dato["nombrecompleto"];?>" data-tipo="<?php echo $dato["tipo"];?>" data-solicitud="<?php echo $dato["solicitud"];?>" data-estado="<?php echo $dato["estadosolicitud"];?>" data-telefono="<?php echo $dato["telefono"];?>" data-email="<?php echo $dato["correo"];?>" data-empresa="<?php echo $dato["razonsocial"];?>" data-cliente="<?php echo $dato["cliente"];?>" data-ciudad="<?php echo $dato["ciudadempresa"];?>" data-medioentrega="<?php echo $dato["medios"];?>" data-fechaentrega="<?php echo $dato["fechaentrega"];?>" data-observacionesticket="<?php echo $dato["observacionesticket"];?>" data-respuestaticket="<?php echo $dato["respuestaticket"];?>" data-estadotrabajador="<?php echo $dato["estadotrabajador"];?>">Responder</button>					
						
	<?php } ?>
     </tr>     
      </tbody>
  </table>

  <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
	
   	<?php include "inc/mverdatos.php";?>
	<?php include "inc/mnuevoticket.php";?>
     </div> 	
  </div> 

     
   <!-- Llamar los javascript-->
    <script src="../js/doSearch.js"></script>
    <script src="../js/hora.js"></script>
    <script src="../js/vermodal.js"></script>
    <script src="../js/registroTicket.js"></script>
    <script src="../js/actualizarTicket.js"></script>
     <!-- Jquery -->
     
    <?php include "inc/footer.php"?>  