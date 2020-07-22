<?php
	if (empty($_POST['edit_id'])){
		$errors[] = "ID está vacío.";
	} elseif (!empty($_POST['edit_id'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) nombre
    $nombre = mysqli_real_escape_string($con,(strip_tags($_POST["edit_nombre"],ENT_QUOTES)));
	$apellido = mysqli_real_escape_string($con,(strip_tags($_POST["edit_apellido"],ENT_QUOTES)));
	$correo = mysqli_real_escape_string($con,(strip_tags($_POST["edit_correo"],ENT_QUOTES)));
	$num_tel = intval($_POST["edit_num_tel"]);
	$nota =mysqli_real_escape_string($con,(strip_tags($_POST["edit_nota"],ENT_QUOTES)));
	
	$id=intval($_POST['edit_id']);
	// UPDATE data into database
    $sql = "UPDATE tblprod SET nombre='".$nombre."', apellido='".$apellido."', correo='".$correo."', nota='".$nota."',  num_tel='".$num_tel."' WHERE id='".$id."' ";
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La persona ha sido actualizado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la actualización falló. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}
?>			