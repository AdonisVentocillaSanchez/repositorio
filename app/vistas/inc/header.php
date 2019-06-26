<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <title><?php echo NOMBRESITIO;?></title>
</head>
<body>
    <div class="container">        
        <nav class="navbar navbar-inverse" style="background-color: #F8C471; border-color: #F8C471;">
            <div class="container-fluid" style="background-color: #F8C471; border-color: #F8C471;">
                <div class="navbar-header" style="background-color: #F8C471; border-color: #F8C471;">
                    <a class="navbar-brand" style="color: #FFFF" href="<?php echo RUTA_URL; ?>"><?php echo TITULOUA?></a>
                </div>
                <ul class="nav navbar-nav" >  
                    <li class="active" style="background-color: #FFFF">
                        <a href="<?php echo RUTA_URL; ?>/paginas/agregar" style="color:  #FFFF" >Crear proyecto</a>
                    </li>
                    <li style="padding-left: 400px">
                        <a href="salir.php" style="color:  #FFFF" >Cerrar la sesión</a>
                    </li>
                </ul>
            </div>
        </nav>
