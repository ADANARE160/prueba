<<div class="d-flex justify-content-center text-center">
	
<form class="p-4 bg-light" method="post">
	<div class="form-group">
		<label for="nombre">Nombre Usuario:</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"><i class="fa-solid fa-user"></i></span>
			</div>
			<input type="text" class="form-control" placeholder="Ingrese Nombres, Apellidos" id="nombre" name="registroNombre">
		</div>
	</div>
	<div class="form-group">
		<label for="email">Correo Electronico:</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"><i class="fa-solid fa-at"></i></span>
			</div>
			<input type="email" class="form-control" placeholder="Ingrese Su Email" id="email" name="registroEmail">
		</div>
	</div>
	<div class="form-group">
		<label for="pwd">Contraseña:</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"><i class="fa-solid fa-key"></i></span>
			</div>
			<input type="password" class="form-control" placeholder="Ingrese clave de sistema" id="pwd" name="registroPassword">
		</div>
	</div>
	<div class="form-group">
		<label for="pwd">Clave Empresarial:</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"><i class="fa-light fa-lock-keyhole"></i></span>
			</div>
			<input type="password" class="form-control" placeholder="Ingrese clave empresaral" id="pwd1" name="registroEmpresarial">
		</div>
	</div>
	<div class="form-group form-check">
		<label class="form-check-label">
			<input class="form-check-input" type="checkbox">Record in dispositive
		</label>
	</div>
	<?php 
	/*---------------------------------------------
		Instanciacion de un metodo no estatico
	-----------------------------------------------*/

		//$registro= new controladorFormularios();
		//$registro-> ctrRegistro();
	 
	 /*---------------------------------------------
		Instanciacion de un metodo Estatico
	-----------------------------------------------*/
$registro= controladorFormularios::ctrRegistro();
if($registro== "ok"){
	echo '<script>
	if ( window.history.replaceState ){
		window.history.replaceState( null, null, window.location.href );
	}
	</script>';

	echo '<div class="alert alert-success">El usuario ha sido registrado</div>';
}
	 ?>

	<button type="submit" class="btn btn-primary">Registrarse</button>
</form>
</div>