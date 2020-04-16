 <!--modal 2 ver datos-->
  
  <div class="modal fade" id="vermas" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Ticket</h4>
        </div>
        <div class="modal-body">
              		<form id="regrespuesta">
				<div class="row">
				<div class="form-group col-lg-3">
					<label for="#ticket">#ticket</label>
					<input type="number" class="form-control form-control-sm " id="ticket" name="ticket" readonly>
				</div>
					
				<div class="form-group col-lg-6">
					<label for="nombre completo">Nombre Completo:</label>
					<input type="text" class="form-control form-control-sm" id="nombre" name="nombre" readonly>
				</div>
											 		 			 		 
				<div class="form-group col-lg-3">
					<label for="Cedula">Número de cédula:</label>
					<input type="number" class="form-control form-control-sm" id="cedula" name="cedula" readonly>
				</div>
				</div>
		
				<div class="row">
				<div class="form-group col-lg-3">
					<label for="Telefono">Télefono de contacto:</label>
					<input type="number" class="form-control form-control-sm" id="telefono" name="telefono" readonly>
				</div>
				
				<div class="form-group col-lg-6">
					<label for="Email">E-mail:</label>
					<input type="text" class="form-control" id="email" name="email" readonly>
				</div>
				
				<div class="form-group col-lg-3">
					<label for="Estado">Estado Del Trabajador:</label>
					<input type="text" class="form-control" id="estado" name="estado" readonly>
				</div>
				</div>
					
				<div class="row">
				<div class="form-group col-lg-4">
					<label for="Empresa">Empresa</label>
					<input type="text" class="form-control" id="empresa" name="empresa" readonly>	
				</div>
				<div class="form-group col-lg-4">
					<label for="Cliente">Cliente:</label>
					<input type="text" class="form-control" id="cliente" name="cliente" readonly>	
				</div>
				<div class="form-group col-lg-4">
					<label for="Municipio">Municipio</label>
					<input type="text" class="form-control" id="municipio" name="municipio" readonly>	
				</div>
				</div>
								
				<div class="row">
				<div class="form-group col-lg-4">
					<label for="tiposolicitud">Tipo de solicitud:</label>
					<input type="text" class="form-control" id="tiposolicitud" name="tiposolicitud" readonly>
					</div>
				<div class="form-group col-lg-4">
					<label for="fechaentrega">Fecha de entrega:</label>
					<input id="fechaentrega" class="form-control" name="fechaentrega" type="date" readonly>
				</div>

				<div class="form-group col-lg-4">
					<label for="medioentrega">Medio de entrega:</label>
					<input type="text" class="form-control" id="medioentrega" name="medioentrega" readonly>
				</div>
				</div>
				<div class="row">
				<div class="form-group col-lg-12">
					<label for="solicitud">Solicitud</label>
					<textarea id="solicitud" class="form-control" name="solicitud" readonly></textarea>
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
					<input type="text" class="form-control" id="usuario" name="usuario" readonly>
				</div>
	    
				 <div class="modal-footer">	
					<button type="button" class="btn btn-success" data-dismiss="modal">Responder Solicitud</button>
				</div>
          </form>
		  </div>
   		</div>
      </div>
    </div>
  
<!-- Fin Modal ver datos -->
