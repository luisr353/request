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
require_once("../controller/usuarios_controller.php");
?>

<?php include "inc/header.php"?> 

  <body style="background-color:#f7f8f9;">
   
  <?php include "inc/cabecera.php"?>  
     
   
<div class="main-content">
	<div class="sesionactiva">
	  <h1>Usuarios</h1>	
	</div>

		<div class="container">           
		  <!--- aqui va el cuerpo -->
		  <ul class="nav nav-tabs">
		  <li role="presentation" class="active"><a href="#">Administrador de Usuarios</a></li>
		   </ul>


		<div id="usuarios">
		<table id="tabla" class="table table-hover" style="font-size: 12px;">
			<thead>
			  <tr>
				<th>No.</th>
				<th>NOMBRE</th>
				<th>NIVEL</th>
				<th>ÁREA</th>
				<th style="text-align: center">EDITAR</th>
				<th style="text-align: center">ELIMINAR</th>
			  </tr>
			</thead>
			<tbody>
			<?php
		$numero=1;
		foreach ($usuarios as $usuario) { ?>
			   <!-- Creamos la tabla y listamos el resultado de la consulta,le agregamos el botón de actualizar -->     
			<tr>	
			<td><?php echo $numero++ ?></td>  
			<td><?php echo $usuario["nombre"];?></td>
			<td><?php echo $usuario["tipo_usuario"];?></td>
			<td><?php echo $usuario["areas"];?></td>
			<td style="text-align: center">
			<a href=" " data-toggle="modal" data-target="#edituser"title="Editar">
				<span class="glyphicon glyphicon-pencil"></span></a></td>
			<td><a href="" data-toggle="modal" data-target="#eliminar" title="eliminar" id="btnEliminarusuario" value="<?php echo $areas["idareas"];?>" onclick=EliminarUsuario(<?php echo $usuario["idusuario"];?>);>
    	<span class="glyphicon glyphicon-remove"></span></a>
			</td>
		<?php }?>
			</tbody>
		</table>
		<button type="button" name="nUsuario" class="btn btn-primary pull-right" data-toggle="modal" data-target="#nuevoUsuario">Nuevo Usuario</button>	
		</div>

		<div class="modal fade" id="nuevoUsuario" role="dialog">
			<div class="modal-dialog modal-lg">
			  <div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				  <h4 class="modal-title">Nuevo usuario</h4>
				 </div>
				   <div class="modal-body">
				   <form id="formulario_registro">
					<!-- Estructura del formulario -->
					<fieldset>

					  <legend class="center">Registro</legend>

					  <!-- Caja de texto para usuario -->
					  <label class="sr-only" for="user">Nombre y Apellido</label>
					  <div class="input-group">
						<div class="input-group-addon"><i class="fa fa-user"></i></div>
						<input type="text" class="form-control" name="name" placeholder="Nombre y Apellido">
					  </div>

					  <!-- Div espaciador -->
					  <div class="spacing-2"></div>

					  <!-- Caja de texto para usuario -->
					  <label class="sr-only" for="user">Email</label>
					  <div class="input-group">
						<div class="input-group-addon"><i class="fa fa-at"></i></div>
						<input type="email" class="form-control" name="email" placeholder="Email">
					  </div>

					  <!-- Div espaciador -->
					  <div class="spacing-2"></div>

					  <!-- Caja de texto para nivel -->
					  <label class="sr-only" for="user">Nivel del usuario</label>
					  <div class="input-group">
						<div class="input-group-addon"><i class="fa fa-user-secret"></i></div>
						<select id="nivel" class="form-control" name="nivel">
							<option value="">Elige nivel de usuario</option>
							<?php
								//Agrego a la lista de medios de entrega existentes para poder seleccionar
								foreach ($niveles as $nivel) { ?>
								<option value="<?php echo $nivel["nivel"];?>">
									<?php echo $nivel["tipo_usuario"];?> 
								</option>
									<?php	
								}//Cerrando ciclo while		
									?>
							</select>
					  </div>

					   <!-- Div espaciador -->
					  <div class="spacing-2"></div>

					  <!-- Caja de texto para nivel -->
					  <label class="sr-only" for="user">Área</label>
					  <div class="input-group">
						<div class="input-group-addon"><i class="fa fa-filter"></i></div>
						<select id="area" class="form-control" name="area">
							<option value="">Elige una área...</option>
							<?php
								//Agrego a la lista de medios de entrega existentes para poder seleccionar
								foreach ($listaareas as $area) { ?>
								<option value="<?php echo $area["idareas"];?>">
									<?php echo $area["areas"];?> 
								</option>
									<?php	
								}//Cerrando ciclo while		
									?>
							</select>
					  </div>

					  <!-- Div espaciador -->
					  <div class="spacing-2"></div>

					  <!-- Caja de texto para la clave-->
					  <label class="sr-only" for="clave">Contraseña</label>
					  <div class="input-group">
						<div class="input-group-addon"><i class="fa fa-lock"></i></div>
						<input type="password" autocomplete="off" class="form-control" name="clave" placeholder="Contraseña">
					  </div>

					  <!-- Div espaciador -->
					  <div class="spacing-2"></div>

					  <!-- Caja de texto para la clave-->
					  <label class="sr-only" for="clave">Verificar contraseña</label>
					  <div class="input-group">
						<div class="input-group-addon"><i class="fa fa-lock"></i></div>
						<input type="password" autocomplete="off" class="form-control" name="clave2" placeholder="Verificar contraseña">
					  </div>
					  <!-- Div espaciador -->
					  <div class="spacing-2"></div>

					  <!-- Animacion de load (solo sera visible cuando el cliente espere una respuesta del servidor )-->
					  <div class="row" id="load" hidden="hidden">
						<div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5">
						  <img src="../img/load.gif" width="100%" alt="">
						</div>
						<div class="col-xs-12 center text-accent">
						  <span>Validando información...</span>
						</div>
					  </div>
					  <!-- Fin load -->

					  <!-- boton #login para activar la funcion click y enviar el los datos mediante ajax -->
					  <div class="row">
						<div class="col-xs-8 col-xs-offset-2">
						  <div class="spacing-2"></div>
						  <button type="button" class="btn btn-primary btn-block" name="button" id="registro">Registrar</button>
						</div>
					  </div>

					</fieldset>
				  </form>

				   </div>
				</div>
			</div>
		</div>
	</div>    
</div>
   <!-- Llamar los javascript-->
    <script src="../js/registro.js"></script>
    <script src="../js/eliminar.js"></script>
     <!-- Jquery --> 
    <?php include "inc/footer.php"?>
       
