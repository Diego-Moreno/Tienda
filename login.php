<?php 
$titulopagina='Hola';
include('int/header.php'); ?>

<div class="jumbotron">
<div class="container" style="padding:50px 0">
	<div class="logo">Ingresar</div>

	<div class="login-form-1">
		<form id="login-form" class="text-left">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="lg_username" class="sr-only">Email</label>
						<input type="text" class="form-control" id="email" name="email" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="lg_password" class="sr-only">Contraseña</label>
						<input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Contraseña">
					</div>
				</div>
				<button type="submit" class="login-button"><i class="fa fa-chevron-right"> Registrarse</i></button>
			</div>
			<div class="etc-login-form"  >
				<p>Eres nuevo? <a href="registro.php">Registrate con nosotros</a></p>
			</div>
		</form>
	</div>

</div>
</div>

</div>
<?php include('int/footer.php'); ?>