 <!--modal 2 ver datos-->
 
 <div class="modal fade" id="verdatos" tabindex="-1" role="dialog" aria-labelledby="verdatosLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
 
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Información Ticket</h4>
      </div>
         <form id="actualidarDatos">
          <div class="modal-body">
          
          	<div class="row">
				<div class="form-group col-lg-3">
					<label for="ticket">#ticket</label>
					<input type="number" class="form-control form-control-sm" id="ticket" name="ticket">
				</div>
					
				<div class="form-group col-lg-6">
					<label for="nombre completo">Nombre:</label>
					<input type="text" class="form-control form-control-sm" id="nombrecompleto" name="nombre">
				</div>
											
				<div class="form-group col-lg-3">
					<label for="Cedula"># Cédula:</label>
					<input type="number" class="form-control form-control-sm" id="cedula" name="cedula">
				</div>
				</div>
		
				<div class="row">
				<div class="form-group col-lg-3">
					<label for="Telefono">Télefono:</label>
					<input type="number" class="form-control form-control-sm" id="telefono" name="telefono">
				</div>
				
				<div class="form-group col-lg-6">
					<label for="Email">E-mail:</label>
					<input type="text" class="form-control" id="email" name="email">
				</div>
				
				<div class="form-group col-lg-3">
					<label for="Estado">Estado Trabajador:</label>
					<input type="text" class="form-control" id="estadotrabajador" name="estado">
				</div>
				</div>
					
				<div class="row">
				<div class="form-group col-lg-4">
					<label for="Empresa">Empresa</label>
					<input type="text" class="form-control" id="empresa" name="empresa">	
				</div>
				<div class="form-group col-lg-4">
					<label for="Cliente">Cliente:</label>
					<input type="text" class="form-control" id="cliente" name="cliente">	
				</div>
				<div class="form-group col-lg-4">
					<label for="Municipio">Municipio</label>
					<input type="text" class="form-control" id="municipio" name="municipio">	
				</div>
				</div>
								
				<div class="row">
				<div class="form-group col-lg-4">
					<label for="tiposolicitud">Tipo de solicitud:</label>
					<input type="text" class="form-control" id="tiposolicitud" name="tipo">
					</div>
				<div class="form-group col-lg-4">
					<label for="medioentrega">Medio de entrega:</label>
					<input type="text" class="form-control" id="medioentrega" name="medioentrega">
				</div>
				</div>
				<div class="row">
				<div class="form-group col-lg-12">
					<label for="solicitud">Solicitud</label>
					<textarea class="form-control" name="solicitud" id="solicitud"></textarea>
				</div>
				<hr>
				
				<div class="form-group col-lg-12">
					<label for="observaciones">Observaciones:</label>
					<textarea id="observaciones" class="form-control" name="observaciones"></textarea>
				</div>
				<hr>
				<div class="form-group col-lg-12">
					<label for="respuesta">Respuesta:</label>
					<textarea id="respuesta" class="form-control" name="respuesta" placeholder="Escriba su respuesta..."></textarea>
				</div>
				
				<div class="form-group col-lg-12" style=" display:none">
					<label for="Usuario">usuario</label>
					<input type="text" class="form-control" id="usuario" name="usuario">
				</div>
	    
				 <div class="modal-footer">	
				 <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					<button type="button" class="btn btn-success" data-dismiss="modal">Responder Solicitud</button>
				</div>
         </div>
     </form>
    </div>
  </div>
</div>
</div>
        
<!-- Fin Modal ver datos -->
