<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Inicio de sesion</title>
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL;?>/css/login.css">
</head>
<body>

	<div class="login-page">
		<div class="form">
	<form class="login-form" action="<?php echo RUTA_URL ?>/principal/index" method="POST">
		
		<input type="text" name="user" required="" placeholder="usuario" />
		<br>

		<input type="password" name="pass" required="" placeholder="clave">
		<br>
		<button type="submit">Ingresar</button>
	</form>
	</div>
	</div>

</body>
</html>