<?php
	if (empty($_POST['apellido'])){
		$errors[] = "Ingresa el nombre de la persona.";
	} elseif (!empty($_POST['apellido'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) nombre
    $nombre = mysqli_real_escape_string($con,(strip_tags($_POST["nombre"],ENT_QUOTES)));
	$apellido = mysqli_real_escape_string($con,(strip_tags($_POST["apellido"],ENT_QUOTES)));
	$correo = mysqli_real_escape_string($con,(strip_tags($_POST["correo"],ENT_QUOTES)));
	$num_tel = intval($_POST["num_tel"]);
	$nota = mysqli_real_escape_string($con,(strip_tags($_POST["nota"],ENT_QUOTES)));
	

	// REGISTER data into database
    $sql = "INSERT INTO tblprod(id, nombre, apellido, correo, num_tel, nota) VALUES (NULL,'$nombre','$apellido','$correo','$num_tel','$nota')";
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "ha sido guardado con éxito.";
    } else {
        $errors[] = "Lo sentimos, el registro falló. Por favor, regrese y vuelva a intentarlo.";
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