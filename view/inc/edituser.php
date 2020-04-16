

<div class="modal fade" id="edituser" role="dialog">
			<div class="modal-dialog modal-lg">
			  <div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				  <h4 class="modal-title">Editar Usuario</h4>
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
						<input type="text" class="form-control" name="name" id="name" placeholder="Nombre y Apellido">
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
							
							</select>
					  </div>

					  <!-- Div espaciador -->
					  <div class="spacing-2"></div>

					  <!-- Caja de texto para la clave-->
					  <label class="sr-only" for="clave">Contraseña</label>
					  <div class="input-group">
						<div class="input-group-addon"><i class="fa fa-lock"></i></div>
						<input type="password" autocomplete="off" class="form-control" name="clave" id="clave" placeholder="Contraseña">
					  </div>

					  <!-- Div espaciador -->
					  <div class="spacing-2"></div>

					  <!-- Caja de texto para la clave-->
					  <label class="sr-only" for="clave">Verificar contraseña</label>
					  <div class="input-group">
						<div class="input-group-addon"><i class="fa fa-lock"></i></div>
						<input type="password" autocomplete="off" class="form-control" name="clave2" id="clave2" placeholder="Verificar contraseña">
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
						  <button type="button" class="btn btn-primary btn-block" name="button" id="editar">Registrar</button>
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
     <script src="../js/doSearch.js"></script>
    <script src="../js/hora.js"></script>
    <script src="../js/vermodal.js"></script>
    <script src="../js/registro.js"></script>
    <script src="../js/eliminar.js"></script>
     <!-- Jquery -->