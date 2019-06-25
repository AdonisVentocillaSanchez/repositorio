<?php require RUTA_APP . '/vistas/inc/header.php';?>
<a href="<?php echo RUTA_URL; ?>/paginas" class="btn btn-light"><i class="fa fa-backward"></i>Volver</a>
<div class="card card-body bg-light mt-5">
    <h2>Editar usuarios</h2>
    <form action="<?php echo RUTA_URL ?>/paginas/editar/<?php echo $datos['id_usuario']; ?>" method="POST">

        <div class="form-group">
            <label for="nombre">Nombre: <sup>*</sup></label>
            <input type="text" name="nombre" class="form-control form-control-lg" value="<?php echo $datos['nombre'];?>">
        </div>
        <div class="form-group">
            <label for="email">Email: <sup>*</sup></label>
            <input type="email" name="email" class="form-control form-control-lg" value="<?php echo $datos['email'];?>">
        </div>
        <div class="form-group">
            <label for="telefono">Telefono: <sup>*</sup></label>
            <input type="number" name="telefono" class="form-control form-control-lg" value="<?php echo $datos['telefono'];?>">
        </div>

        <input type="submit" class="btn btn-sucess" value="Editar Usuario">
        
    </form>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>