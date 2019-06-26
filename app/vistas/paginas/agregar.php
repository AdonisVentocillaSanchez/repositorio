<?php require RUTA_APP . '/vistas/inc/header.php';?>
<a href="<?php echo RUTA_URL; ?>/paginas" class="btn btn-light"><i class="fa fa-backward"></i>Volver</a>
<div class="card card-body bg-light mt-5">
    <h2>Nuevo proyecto</h2>
    <form action="<?php echo RUTA_URL ?>/paginas/agregar" method="POST">

    <center>
    <table class="egt" id="maintable">
        <tr>
          <th colspan="8"><h3><center>FORMULACIÓN DEL PROYECTO</center></h3></th>
        </tr> 

        <tr>
          <th colspan="8">DATOS GENERALES </th>
        </tr> 

        <tr>
          <td colspan="2" width="20%">Institución</td>
          <td colspan="2"><input type="text" name="id_inst"></td>
          <td colspan="2" width="20%">Código</td>
          <td colspan="2"><input type="text" name="codigo"></td>
        </tr>

        <tr>
          <td colspan="2" width="20%">Fecha</td>
          <td colspan="2"><input type="text" name="fecha_reg"></td> 
          <td colspan="2" width="20%">Vigencia</td>
          <td colspan="2"><input type="text" name="vigencia"></td>
        </tr>

        <tr>
          <td colspan="2">Tipo de Proyecto</td>
          <td colspan="2"><input type="text" name="tipo_proy"></td>
          <td colspan="2">Tipo de Documento</td>
          <td colspan="2"><input type="text" name="tipo_doc"></td>
        </tr>
      </table>

      <br>

      <table id="table_co">
        <tr>
            <th colspan="8">RESPONSABLES DEL PROYECTO</th>
        </tr>
        <tr>
          <td colspan="4" width="20%">Responsable de Proyecto</td>
          <td colspan="4"><input type="text" name="res_proy" ></td>
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
          <td colspan="2"><input type="text" name="num_reg"></td>
          <td colspan="2">Nombre de Proyecto</td>
          <td colspan="2"><input type="text" name="nom_proy"></td>
        </tr>

       <tr>
          <td colspan="2">Linea de Investigación General</td>
          <td colspan="2"><input type="text" name="linea_gen"></td>
          <td colspan="2">Linea de Investigación Específica</td>
          <td colspan="2"><input type="text" name="linea_esp"></td>
       </tr>

        <tr>
          <th colspan="8">FECHAS DE PROYECTO </th>
        </tr>

        <tr>
        <td colspan="2">Fecha inicio</td>
          <td colspan="2"><input type="txt" name="fecha_ini"></td>
          <td colspan="2">Fecha de finalización</td>
          <td colspan="2"><input type="txt" name="fecha_fin"></td>
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
          <td colspan="5"><input type="txt" name="obj_g"></td>
          <td colspan="3"><input type="txt" name="avance_g"></td>
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
          <td colspan = "2" width="5%" align="center"><center><button type="button" name="addif" id="addif" class="btn btn-warning btn-xs">+</button></center></td>
        </tr>

      </table>
      <br>
      <br>
      <div align="center">
      <input type="submit" class="btn btn-sucess" value="Crear Proyecto">
      </div>

</center>
        
    </form>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>