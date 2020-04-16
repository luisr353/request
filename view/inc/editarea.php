<!-- Modal para editar -->
<?php
require_once("../db/db.php");
require_once("../controller/listas_controller.php");
?>
  <div class="modal fade" id="editarea" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Editar Area</h4>
        	</div>
        	<div class="modal-body">

        	<div class="row">
				<div class="form-group col-lg-3">
					<input type="text" class="form-control" value="<?php echo $areas["idareas"];?>" >
					
		
				</div>
			</div>

			<div class="modal-footer">
				 <input type="submit" class="btn btn-success" name="nuevoticket" value="Actualizar">				    
			</div>
          
				</div>
			</div>
		</div>
	</div>
