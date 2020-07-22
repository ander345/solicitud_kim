<div id="editProductModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form name="edit_product" id="edit_product">
					<div class="modal-header">						
						<h4 class="modal-title">Editar Persona</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Nombres</label>
							<input type="text" name="edit_nombre"  id="edit_nombre" class="form-control" required>
							<input type="hidden" name="edit_id" id="edit_id" >
						</div>
						<div class="form-group">
							<label>Apellidos</label>
							<input type="text" name="edit_apellido" id="edit_apellido" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Correo Electronico</label>
							<input type="email" name="edit_correo" id="edit_correo" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Telefono</label>
							<input type="number" name="edit_num_tel" id="edit_num_tel" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Precio</label>
							<input type="text" name="edit_nota" id="edit_nota" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-info" value="Guardar datos">
					</div>
				</form>
			</div>
		</div>
	</div>