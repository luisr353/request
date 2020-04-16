<!-- Modal para hacer nuevo ticket -->
  <div class="modal fade" id="nuevoTicket" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Nuevo Ticket</h4>
        	</div>
        	<div class="modal-body">
              		<form id="regsolicitud" method="post" action="../controller/validarNuevoTicket.php">
				<div class="row">
				<div class="form-group col-lg-6">
					<label for="horainicio">Hora Inicio Solicitud:</label>
					<input type="time" step="1" class="form-control" name="horainicio" id="horainicio"></input>
				</div>
				
				<div class="form-group col-lg-6">
					<label for="via">Vía de contacto</label>
					<select id="vias" name="vias"  class="form-control" onChange="Hora()">
					<option value="">Via de contacto:</option>
							<?php
							  //Agrego a la lista de clientes existentes para poder seleccionar
							while ($via=$vias->fetch_object())
							{
							?>
								 <option value="<?php echo $via->idvias?>">
									<?php echo $via->viascontacto?> 
								 </option>
							<?php	
							}//Cerrando ciclo while		
							?> 
					</select>
							</div></div>
						 <hr>
					 <div class="row">
					 
				<div class="form-group col-lg-6">
					<label for="cedula">Número de cédula:</label>
					<input type="number" class="form-control" id="cedula" name="cedula" required>
				</div>
				
				<div class="form-group col-lg-6">
					<label for="empresa">Empresa:</label>
						<select id="razonsocial" class="form-control" name="razonsocial" required>
							<option value="">Elige una opción...</option>
							<option value="CONTACTAMOS DE COLOMBIA S.A.S.">CONTACTAMOS DE COLOMBIA S.A.S.</option>
							<option value="CONTACTAMOS OUTSOURCING S.A.S.">CONTACTAMOS OUTSOURCING S.A.S.</option>
							<option value="ENFOQUE S.A.S.">ENFOQUE S.A.S.</option>
							<option value="EXTERNO">EXTERNO</option>
						</select>
				</div>
					</div>
					<div class="row">
				<div class="form-group col-lg-3">
					<label for="nombre1">Primer nombre:</label>
					<input type="text" class="form-control" id="nombre1" name="nombre1">
				</div>

				<div class="form-group col-lg-3">
					<label for="nombre2">Segundo nombre:</label>
					<input type="text" class="form-control" id="nombre2" name="nombre2">
						</div>
				
				<div class="form-group col-lg-3">
					<label for="apellido1">Primer apellido:</label>
					<input type="text" class="form-control" id="apellido1" name="apellido1">
				</div>

				<div class="form-group col-lg-3">
					<label for="apellido2">Segundo apellido:</label>
					<input type="text" class="form-control" id="apellido2" name="apellido2">
					</div></div>
				<div class="row">
				<div class="form-group col-lg-6">
					<label for="Telefono">Télefono de contacto:</label>
					<input type="number" class="form-control" id="telefono" name="telefono">
				</div>

				<div class="form-group col-lg-6">
					<label for="Email">E-mail:</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@gmail.com">
					</div></div>
					<hr>
				<div class="row">
				<div class="form-group col-lg-4">
					<label for="cliente">Cliente:</label>
						<select id="cliente" name="cliente" class="form-control" >
							<option value="0">Seleccione cliente:</option>
							<?php
							  //Agrego a la lista de clientes existentes para poder seleccionar
							while ($cliente=$clientes->fetch_object())
							{
							?>
								 <option value="<?php echo $cliente->idcliente?>">
									<?php echo $cliente->cliente?> 
								 </option>
							<?php	
							}//Cerrando ciclo while		
							?> 
						</select>
				</div>
				<div class="form-group col-lg-4">
					<label for="municipio">Ciudad:</label>
						<select id="ciudad" name="ciudad" class="form-control" >
							<option value="">Elige una opción...</option>
							<?php
							  //Agrego a la lista de ciudades existentes para poder seleccionar
							while ($ciudad=$ciudades->fetch_object())
							{
							?>
								 <option value="<?php echo $ciudad->idciudades?>">
									<?php echo $ciudad->ciudadempresa?> 
								 </option>
							<?php	
							}//Cerrando ciclo while		
							?>
						</select>
					</div>
					<div class="form-group col-lg-4">
					<label for="estado">Estado Del Trabajador:</label>
					<select id="estado" name="estadotrabajador" class="form-control" >
					<option value="">Elige una opción...</option>
					<option value="ACTIVO">ACTIVO</option>
					<option value="RETIRADO">RETIRADO</option>
					</select>
					</div>
					
				
					</div>
				<div class="row">
				<div class="form-group col-lg-4">
					<label for="Area">Area: </label>
					<select id="area" name="area" class="form-control" >
					<option value="">Elige una opción...</option>
					<?php
						//Agrego a la lista de areas existentes para poder seleccionar
						while ($area=$areas->fetch_object())
						{
					?>
					 	<option value="<?php echo $area->idareas?>">
							<?php echo $area->areas?> 
					 	</option>
							<?php	
						}//Cerrando ciclo while		
							?>
					</select>
				</div>
				
				<div class="form-group col-lg-4">
					<label for="estado">Categoria Solicitud:</label>
					<select id="categoriasolicitud" class="form-control" name="categoriasolicitud">
					<option value="">Elige una opción...</option>
					<?php
						//Agrego a la lista de categorias existentes para poder seleccionar
						while ($categoria=$categorias->fetch_object())
						{
					?>
					 	<option value="<?php echo $categoria->idcategoria?>">
							<?php echo $categoria->categoriasolicitud?> 
					 	</option>
							<?php	
						}//Cerrando ciclo while		
							?>
					</select>
				</div>
				<div class="form-group col-lg-4">
					<label for="tiposolicitud">Tipo de solicitud:</label>
					<select id="solicitud" class="form-control" name="tiposolicitud">
					<option value="">Elige una opción...</option>
						<?php
						//Agrego a la lista de tiposolicitudes existentes para poder seleccionar
						while ($tipoSolicitud=$tipoSolicitudes->fetch_object())
						{
					?>
					 	<option value="<?php echo $tipoSolicitud->idsolicitud?>">
							<?php echo $tipoSolicitud->tipo?> 
					 	</option>
							<?php	
						}//Cerrando ciclo while		
							?>
					</select>
					</div></div>
				<div class="row">
				<div class="form-group col-lg-12">
					<label for="solicitud">Solicitud</label>
					<textarea id="solicitud" name="solicitud" class="form-control" placeholder="Información breve pero clara sobre lo comunicado por el trabajador en su solicitud..." required></textarea>
				</div>
				<hr>
				<div class="form-group col-lg-4">
					<label for="fechaentrega">Fecha de entrega:</label>
					<input id="fechaentrega" name="fechaentrega" class="form-control"  type="date">
				</div>
				<div class="form-group col-lg-4">
					<label for="fechaentrega">INFORMATIVO/TRÁMITE:</label>
					<select id="tiposervicio" class="form-control" name="tiposervicio">
					<option value="">Elige una opción...</option>
					<option value="TRÁMITE">TRÁMITE</option>
					<option value="INFORMATIVO">INFORMATIVO</option>
					</select>
				</div>

				<div class="form-group col-lg-4">
					<label for="medioentrega">Medio de entrega:</label>
					<select id="medioentrega" class="form-control" name="medioentrega">
					<option value="">Elige una opción...</option>
					<?php
						//Agrego a la lista de medios de entrega existentes para poder seleccionar
						while ($medioentrega=$medioentregas->fetch_object())
						{
					?>
					 	<option value="<?php echo $medioentrega->idmedios?>">
							<?php echo $medioentrega->medios?> 
					 	</option>
							<?php	
						}//Cerrando ciclo while		
							?>
					</select>
				</div>
				<div class="form-group col-lg-12">
					<label for="observaciones">Observaciones:</label>
					<textarea id="observacionesticket" class="form-control" name="observacionesticket" placeholder="Observaciones, comentarios u otras anotaciones que ayuden a dar respuesta a la solicitud..."></textarea>
				</div>
				<hr>
				<div class="form-group col-lg-12">
					<label for="respuesta">Respuesta:</label>
					<textarea class="form-control" id="respuestaticket" name="respuestaticket" placeholder="Esta respuesta aplica únicamente para solicitudes de tipo informativo..."></textarea>
				</div>
	   			 <div class="form-group col-lg-12" style=" display:none">
					<label for="Usuario">usuario</label>
					<input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo ($_SESSION['id']); ?>">
				</div>
				 <div class="modal-footer">
				 <input type="submit" class="btn btn-success" name="nuevoticket" value="Registrar">
				    
				</div>
          	</form>
		  </div>
   		</div>
      </div>
    </div>
	  </div>
 
 <!-- fin modal-->