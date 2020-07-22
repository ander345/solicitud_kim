<div id="addProductModal" class="table-responsive">
		<div class="modal-dialog">
			<div class="modal-content">
				<form name="add_product" id="add_product">
					<div class="modal-header">						
						<h4 class="modal-title">Enviar datos</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Nombres</label>
							<input type="text" name="nombre"  id="nombre" class="form-control" required>
							
						</div>
						<div class="form-group">
							<label>Apellidos</label>
							<input type="text" name="apellido" id="apellido" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Correo Electronico</label>
							<input type="email" name="correo" id="correo" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Telefono</label>
							<input type="number" name="num_tel" id="num_tel" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Nota</label>
							<input type="text" name="nota" id="nota" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" value="Guardar datos">
					</div>
				</form>
			</div>
		</div>
</div>