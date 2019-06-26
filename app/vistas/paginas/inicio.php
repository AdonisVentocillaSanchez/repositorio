<?php require RUTA_APP . '/vistas/inc/header.php';?>
<table class="table">
    <thead>
        <tr>
            <th>C&oacute;digo</th>
            <th>Proyecto</th>
            <th>Tipo de proyecto</th>
            <th>Fecha de registro</th>

            <th colspan="2"><center>Acciones</center></th>
        </tr>
    </thead>
    
    <tbody>
    <?php foreach($datos['usuarios'] as $usuario): ?>
        <tr>
            <td><?php echo $usuario->codigo; ?></td>
            <td><?php echo $usuario->nom_proy; ?></td>
            <td><?php echo $usuario->tipo_proy; ?></td>
            <td><?php echo $usuario->fecha_reg; ?></td>
            <td><a href="<?php echo RUTA_URL; ?>/paginas/editar/<?php echo $usuario->id; ?>">Editar</a></td>
            <td><a href="<?php echo RUTA_URL; ?>/paginas/borrar/<?php echo $usuario->id; ?>">Borrar</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>