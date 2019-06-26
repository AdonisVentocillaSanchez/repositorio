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
    <?php foreach($datos['proyectos'] as $proyecto): ?>
        <tr>
            <td><?php echo $proyecto->codigo; ?></td>
            <td><?php echo $proyecto->nom_proy; ?></td>
            <td><?php echo $proyecto->tipo_proy; ?></td>
            <td><?php echo $proyecto->fecha_reg; ?></td>
            <td><a href="<?php echo RUTA_URL; ?>/paginas/editar/<?php echo $proyecto->id; ?>">Editar</a></td>
            <td><a href="<?php echo RUTA_URL; ?>/paginas/borrar/<?php echo $proyecto->id; ?>">Borrar</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>