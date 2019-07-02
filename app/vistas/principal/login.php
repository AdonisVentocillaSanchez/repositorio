<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL;?>/css/login.css">	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
	<div class="login-page">
	<center><h2><?php echo NOMBRESITIO;?></h2></center>
		<div class="form">
			<form class="login-form" action="<?php echo RUTA_URL ?>/principal/index" method="POST">
				<div class="form-group">Login</div>      
                <input type="text" name="user" required="" placeholder="usuario">
                <br>
                <input type="password" name="pass" required="" placeholder="clave">
                <br>
				<button type="submit">Ingresar</button>
				<?php
					if(isset($_GET["f"]) && $_GET["f"] == 't')
					{
						echo "<div style='color:red'>Usuario o contraseña invalido </div>";
					}
				?>
				<br>
				<p class="message">¿No est&aacute;s registrado? <a href="<?php echo RUTA_URL;?>/principal/register">Crea una cuenta</a></p>
            </form>
	    </div>
	</div>
</body>
</html>