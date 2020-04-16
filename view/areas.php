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

require_once("../db/db.php");
require_once("../controller/listas_controller.php");

?>
<?php include "inc/header.php"?> 

  <body style="background-color:#f7f8f9;">
   
  <?php include "inc/cabecera.php"?>  
    
          
<div class="main-content">
  <div class="sesionactiva">
    <h1>Listas</h1> 
  </div>

<div class="container">           
  <!--- aqui va el cuerpo -->

	  <ul class="nav nav-tabs">
		<li class="active"><a data-toggle="tab" href="#areas">Áreas</a></li>
		<li><a data-toggle="tab" href="#categorias">Categorias</a></li>
		<li><a data-toggle="tab" href="#ciudades">Ciudades</a></li>
		<li><a data-toggle="tab" href="#clientes">Clientes</a></li>
		<li><a data-toggle="tab" href="#medios">Medios</a></li>
		<li><a data-toggle="tab" href="#tiposolicitud">Tipos de Solicitud</a></li>
		<li><a data-toggle="tab" href="#vias">Vias</a></li>

	  </ul>

	<div class="tab-content">
		<div id="areas" class="tab-pane fade in active">
		  <table class="table table-hover" style="font-size: 12px;">
		<thead>
		  <tr>
			<th>No.</th>
			<th>ÁREA</th>
			<th>EDITAR</th>
			<th>ELIMINAR</th>
		  </tr>
		</thead>

	  <tbody>
		<?php
		$numero=1;
		foreach ($listaareas as $areas) { ?>
		<!--Creamos la tabla y listamos el resultado de la consulta,le agregamos el botón de actualizar-->
		<tr>
		<td><?php echo $numero++; ?></td>  
		<td><?php echo $areas["areas"];?></td>   
		<td><a href="i" data-toggle="modal" data-target="#editarea" title="editar">
		<span class="glyphicon glyphicon-pencil"></span></a></td>
		<td><a href="" data-toggle="modal" data-target="#eliminar" title="eliminar" id="btnEliminarArea" value="<?php echo $areas["idareas"];?>" onclick=EliminarArea(<?php echo $areas["idareas"];?>);>
    	<span class="glyphicon glyphicon-remove"></span></a>
    	</td>
    	</tr>

		<?php
		}  //cerrando el ciclo while
		?>

	  </table>
	  </tbody>
	  <button type="button" name="nUsuario" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Nueva</button>
	  </div>

	  </div>
	</div>      
</div>

 	<?php include "inc/editarea.php";?>
    
  
   <!-- Llamar los javascript-->
     <script src="../js/jquery.js"></script>
	 <script src="../js/bootstrap.js"></script>
	<script src="../js/bootbox.min.js"></script>
    <script src="../js/eliminar.js"></script>
     <!-- Jquery -->
     
    <?php include "inc/footer.php" ?>  
     </body>

</html>
