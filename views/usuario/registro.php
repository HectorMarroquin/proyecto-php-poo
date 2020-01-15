<h1>Registro de usuarios</h1>
<?php if (isset($_SESSION['register']) && $_SESSION['register'] == 'complete') : ?>

	<strong class="alert_green">Registro completado correctamente</strong>

<?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed' ) : ?>

	<strong class="alert-red">Registro fallido introduce bien los datos</strong>
	
<?php endif; ?>

<?php Utils::deleteSession('register'); ?>

<form action="<?=base_url?>Usuario/save" method="post">
	<label for="nombre">Nombre</label>	
	<input type="text" name="nombre" required="required">

	<label for="apellidos">Apellidos</label>
	<input type="text" name="apellidos" required="required">

	<label for="email">Correo</label>
	<input type="email" name="email" required="required">

	<label for="password">Contraseña</label>
	<input type="password" name="password" required="required">

	<input type="submit" value="Registrarse">
</form>