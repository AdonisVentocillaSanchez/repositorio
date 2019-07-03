<?php require RUTA_APP . '/vistas/inc/header.php';?>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="<?php echo RUTA_URL ?>/css/estilos.css">

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <center>
    <form action="<?php echo RUTA_URL ?>/paginas/agregar" method="POST">
    <table>
      <tr>
        <th colspan="8"><h3><center>FORMULACI&Oacute;N DEL PROYECTO</center></h3></th>
      </tr>
      <tr>
        <th colspan="8">DATOS GENERALES </th>
      </tr> 

      <tr>
        <td colspan="2" width="20%">Instituci&oacute;n</td>
        <td colspan="2">
        <select name="institucion" >
          <option value="0">Seleccione:</option>
					<?php foreach($datos['institucion'] as $inst): ?>
					<option value="<?php echo $inst->id;?>"><?php echo $inst->institucion;?></option>
					<?php endforeach; ?>
        </select>
        </td>
        <td colspan="2" width="20%">C&oacute;digo</td>
        <td colspan="2"><input type="text" name="codigo" ></td>
      </tr>

      <tr>
        <td colspan="2" width="20%">Fecha de Registro</td>
        <td colspan="2"><input type="text" value="<?php echo date("Y-m-d");?>" disabled></td> 
        <td colspan="4" width="20%"></td>
      </tr>

      <tr>
        <td colspan="2">Tipo de Proyecto</td>
        <td colspan="2">
        <select name="tipo_proy">
          <option value="0">Seleccione:</option>
          <?php foreach($datos['tipo_proyecto'] as $tproy): ?>
          <option value="<?php echo $tproy->id;?>"><?php echo $tproy->tipo;?></option>
          <?php endforeach; ?>
        </select>
        </td>
        <td colspan="2">Tipo de Documento</td>
        <td colspan="2">
        <select name="tipo_doc">
          <option value="0">Seleccione:</option>
          <?php foreach($datos['tipo_documento'] as $tdoc): ?>
          <option value="<?php echo $tdoc->id;?>"><?php echo $tdoc->documento;?></option>
          <?php endforeach; ?>
        </select>
        </td>
      </tr>
    </table>

    <br>

    <table id="table_co">
      <tr>
          <th colspan="8">RESPONSABLES DEL PROYECTO</th>
      </tr>
      <tr>
        <td colspan="4" width="20%">Responsable de Proyecto</td>
        <td colspan="4"><input type="text" ></td>
      </tr>

      <tr bgcolor=lightgray>
        <td colspan="6" width="95%">Colaboradores de Proyecto</td>
        <td colspan="2" align="center" width="5%"><button type="button" name="addco" id="addco" class="btn btn-warning btn-xs">+</button></td>
      </tr>
    </table>

    <br>

    <table>
      <tr>
        <th colspan="8">DATOS DE PROYECTO </th>
      </tr>

      <tr>
        <td colspan="2">Número de Registro</td>
        <td colspan="2"><input type="number" name="num_reg"></td>
        <td colspan="2">Nombre de Proyecto</td>
        <td colspan="2"><input type="text" name="titulo"></td>
      </tr>

      <tr>
        <td colspan="2">Linea de Investigación General</td>
        <td colspan="2">
        <select name="linea_gene">
          <option value="0">Seleccione:</option>
          <?php foreach($datos['linea_general'] as $lgene): ?>
          <option value="<?php echo $lgene->id;?>"><?php echo $lgene->linea_g;?></option>
          <?php endforeach; ?>
        </select>
        </td>
        <td colspan="2">Linea de Investigación Específica</td>
        <td colspan="2">
        <select name="linea_espe">
          <option value="0">Seleccione:</option>
          <?php foreach($datos['linea_especifica'] as $lespe): ?>
          <option value="<?php echo $lespe->id;?>"><?php echo $lespe->linea_e;?></option>
          <?php endforeach; ?>
        </select>
        </td>
      </tr>

    </table>

    <br>

    <table class="egt" id="user_data">  
      <tr>
        <th  colspan="8" width="100%">ACTIVIDADES DE PROYECTO</th>
      </tr>

      <tr bgcolor=lightgray>
        <td colspan="3" width="40%">Actividad</td>
        <td colspan="1" width="20%">Avance %</td>
        <td colspan="2">Observaciones</td>
        <td colspan="2" align="center" width="5%"><button type="button" name="add" id="add" class="btn btn-warning btn-xs">+</button></td>
      </tr>
    </table>

    <br>

    <table class="egt" id="table_obj">  
      <tr>
        <th colspan="8" width="100%">OBJETIVOS DE PROYECTO</th>
      </tr>

      <tr>
        <td colspan="5">Objetivo General</td>
        <td colspan="1" width="20%">Avance %</td>
        <td colspan="2" width="10%"></td>
      </tr>

      <tr>
        <td colspan="5"><input type="txt" name="obj_gene"></td>
        <td colspan="3"><input type="txt" value="0" disabled></td>
      </tr>

      <tr bgcolor=lightgray>
        <td colspan="5">Objetivos Específicos</td>
        <td colspan="1" width="20%">Avance %</td>
        <td colspan="2" width="5%" align="center"><button type="button" name="adde" id="adde" class="btn btn-warning btn-xs">+</button></td>
      </tr>

    </table>

    <br>

    <table class="egt" id="table_if">
      <tr>
        <th colspan="8">INFORME FINANCIERO </th>
      </tr>

      <tr bgcolor=lightgray>
        <td colspan="3" width="65%">Item</td>
        <td colspan="1" width="10%">Monto Asignado</td>
        <td colspan="1" width="10%">Monto Ejecutado</td>
        <td colspan="1" width="10%">Diferencia</td>
        <td colspan ="2" width="5%" align="center"><center><button type="button" name="addif" id="addif" class="btn btn-warning btn-xs">+</button></center></td>
      </tr>
      
    </table>
    <div align="center">
        <button type="submit" class="btn btn-warning">Agregar</button>
      </div>
    </form>
  </center>
