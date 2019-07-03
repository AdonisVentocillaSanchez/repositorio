<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Registrate</title>
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL;?>/css/login.css">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
	<div class="login-page">
	<h2>Registrate</h2>
		<div class="form"
				<?php
					if(isset($_GET["f"]) && $_GET["f"] == 't')
					{
						echo "<div style='color:red'>Algunos datos no son validos </div>";
					}
				?>>		 
			<form class="login-form" action="<?php echo RUTA_URL ?>/principal/register" method="POST">			     
			<div class="form-group">
				<label>DNI</label>
				<input type="number" class="form-control" required="" placeholder="Ingresa tu DNI" name="dni">
			</div>
			<div class="form-group">
				<label>Nombres</label>
				<input type="text" class="form-control" required="" placeholder="Ingresa tus Nombres" name="nombres">
			</div>
			<div class="form-group">
				<label>Apellidos</label>
				<input type="text" class="form-control" required="" placeholder="Ingresa tus Apellidos" name="apellidos">
			</div>
			<div class="form-group">
				<label>Correo</label>
				<input type="email" class="form-control" required="" placeholder="Ingresa tu correo" name="correo">
			</div>
				<div class="form-group">
				<label>Tel&eacute;fono</label>
			<input type="number" class="form-control" required="" placeholder="Ingresa tu tel&eacute;fono" name="telefono">
			</div>
			<div class="form-group">
				<label>Fecha de nacimiento</label>
				<input type="date" min="1940-01-01" max="<?php echo date("Y-m-d");?>" class="form-control" required="" placeholder="Ingresa tu fecha de nacimiento" name="fecha_nac">
			</div>
			<div class="form-group">
				<label>Usuario</label>
				<input type="text" class="form-control" required="" placeholder="Ingresa tu usuario" name="user">
			</div>
			<div class="form-group">
				<label>Clave</label>
				<input type="password" class="form-control" required="" placeholder="Ingresa tu clave" name="pass">
			</div>
			<div class="form-group">
				<label>Tipo de usuario</label>
				<select class="form-control" name="tipo_usu">
					<option value="0">Seleccione:</option>
					<?php foreach($datos['tipo_usuario'] as $tipo): ?>
					<option value="<?php echo $tipo->id;?>"><?php echo $tipo->tipo;?></option>
					<?php endforeach; ?>
				</select>  
			</div>			

			<button type="submit" class="btn btn-default">Registrar</button>
			<br>
			<p class="message">¿Ya tienes una cuenta? <a href="<?php echo RUTA_URL;?>">Inicia sesi&oacute;n</a></p>
            </form>
	    </div>
	</div>
</body>
</html>