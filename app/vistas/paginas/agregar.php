
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Formulación del Proyecto</title>
  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <meta charset="utf-8"/>
</head>
<body>

  <style>
  table { 
    width: 85%;
    border: 1px solid #000;
  }
  tr, td {
    
    vertical-align: top;
    border: 1px solid #000;
  }
  th {
    background: #F8C471;
    color: #fff;
    }
  input{
  width: 100%;
  }
  </style>

  <center>

    <form method="POST" action="conexion.php">

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

        <!--
        <tr>
          <td colspan="3"><input type="txt" name="obj_e"></td>
          <td ><input type="txt" name="avance_e"></td>
        </tr>-->
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
        <button type="submit" class="btn btn-warning" id="intruccion" name="instruccion" value="agregar">Agregar</button>
      </div>

    </form>
  </center>

  <!--CUADRO DE DIALOGO PARA ACTIVIDADES-->
  <div id="user_dialog" title="">
     <div class="form-group">
        <label>Actividad</label>
        <input type="text" name="item_a" id="item_a" class="form-control" />
     </div>
     <div class="form-group">
        <label>Avance</label>
        <input type="text" name="avance" id="avance" class="form-control" />
     </div>
     <div class="form-group">
        <label>Observaciones</label>
        <input type="text" name="observaciones" id="observaciones" class="form-control" />
     </div>
     <br>
     <div class="form-group" align="center">
        <input type="hidden" name="row_id" id="hidden_row_id" />
        <button type="button" name="save" id="save" class="btn btn-info">Save</button>
     </div>
  </div>

  <!--CUADRO DE DIALOGO PARA OBJETIVOS ESPECIFICOS-->
  <div id="user_dialog_e" title="">
     <div class="form-group">
        <label>Objetivo Especifico</label>
        <input type="text" name="obj_e" id="obj_e" class="form-control" />
     </div>
     <div class="form-group">
        <label>Avance</label>
        <input type="text" name="avance_e" id="avance_e" class="form-control" />
     </div>
     <br>
     <div class="form-group" align="center">
        <input type="hidden" name="row3_idoe" id="hidden_row_idoe" />
        <button type="button" name="saveoe" id="saveoe" class="btn btn-info">Save</button>
     </div>
  </div>

  <!--CUADRO DE DIALOGO PARA INFORME FINANCIERO-->
  <div id="user_dialog_if" title="">
     <div class="form-group">
        <label>Item</label>
        <input type="text" name="item_if" id="item_if" class="form-control" />
     </div>
     <div class="form-group">
        <label>Monto Asignado
        </label>
        <input type="text" name="m_asi" id="m_asi" class="form-control" />
     </div>
       <div class="form-group">
        <label>Monto Ejecutado</label>
        <input type="text" name="m_eje" id="m_eje" class="form-control" />
     </div>
     <div class="form-group">
        <label>Diferencia</label>
        <input type="text" name="diferencia" id="diferencia" class="form-control" />
     </div>
     <br>
     <div class="form-group" align="center">
        <input type="hidden" name="row1_idif" id="hidden_row_idif" />
        <button type="button" name="saveif" id="saveif" class="btn btn-info">Save</button>
     </div>
  </div>

  <!--CUADRO DE DIALOGO PARA COLABORADORES-->
  <div id="user_dialog_co" title="">
     <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" />
     </div>
     <div class="form-group" align="center">
        <input type="hidden" name="row2_idco" id="hidden_row_idco" />
        <button type="button" name="saveco" id="saveco" class="btn btn-info">Save</button>
     </div>
  </div>
  <!-- -->

  <div id="action_alert" title="Action">

  </div>

  </body>
</html>

<script>
$(document).ready(function(){ 
 
 var count = 0;

//Muestra cuadro de dialogo de colaboladores
 $('#user_dialog_co').dialog({
  autoOpen:false,
  width:500
 });

 $('#addco').click(function(){
  $('#user_dialog_co').dialog('option', 'title', 'Agregar Colaborador');
  $('#nombre').val('');
  $('#saveco').text('Save');
  $('#user_dialog_co').dialog('open');
 });

 /*------------------------------------------*/
 //GENERAR FILA POR ITEM
$('#saveco').click(function(){
 var nombre = '';

 nombre = $('#nombre').val();

 if($('#saveco').text() == 'Save')
   {
    count = count + 1;
    output = '<tr id="row2_'+count+'">';
    output += '<td colspan="6">'+nombre+' <input type="hidden" name="hidden_nombre[]" id="nombre'+count+'" class="nombre" value="'+nombre+'" /></td>';
    output += '<td colspan="1" align="center"><button type="button" name="view_details_nom" class="btn btn-info btn-xs view_details_co" id="'+count+'">Ver</button></td>';
    output += '<td colspan="1" align="center"><button type="button" name="remove_details_nom" class="btn btn-danger btn-xs remove_details_co" id="'+count+'">X</button></td>';
    output += '</tr>';
     $('#table_co').append(output);
   }
   else
   {
    var row2_idco = $('#hidden_row_idco').val();
    output = '<td colspan="6">'+nombre+' <input type="hidden" name="hidden_nombre[]" id="nombre'+row2_idco+'" class="nombre" value="'+nombre+'" /></td>';
    output += '<td colspan="1" align="center"><button type="button" name="view_details_if" class="btn btn-warning btn-xs view_details_co" id="'+row2_idco+'">Ver</button></td>';
    output += '<td colspan="1" align="center"><button type="button" name="remove_details_if" class="btn btn-danger btn-xs remove_details_co" id="'+row2_idco+'">X</button></td>';
    $('#row2_'+row2_idco+'').html(output);
   }

   $('#user_dialog_co').dialog('close');
 });

$(document).on('click', '.view_details_co', function(){
  var row2_idco = $(this).attr("id");
  var nombre = $('#nombre'+row2_idco+'').val();

  $('#nombre').val(nombre);
  $('#saveco').text('Edit');
  $('#hidden_row_idco').val(row2_idco);
  $('#user_dialog_co').dialog('option', 'title', 'Modificar Nombre');
  $('#user_dialog_co').dialog('open');
 });

 $(document).on('click', '.remove_details_co', function(){
  var row2_idco = $(this).attr("id");
  if(confirm("Seguro de eliminar fila?"))
  {
   $('#row2_'+row2_idco+'').remove();
  }
  else
  {
   return false;
  }
 });

 $('#action_alert').dialog({
  autoOpen:false
 });

$('#user_form').on('submit', function(event){
  event.preventDefault();
  var count_data = 0;
  $('.nombre').each(function(){
   count_data = count_data + 1;
  });
  if(count_data > 0)
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"conexion.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#table_co').find("tr:gt(1)").remove();
     $('#action_alert').html('<p>Data insertada</p>');
     $('#action_alert').dialog('open');
    }
   })
  }
  else
  {
   $('#action_alert').html('<p>Agregue algun dato</p>');
   $('#action_alert').dialog('open');
  }
 });


});
</script>

<script>
$(document).ready(function(){ 
 
 var count = 0;

//Muestra cuadro de dialogo de actividades 
 $('#user_dialog_if').dialog({
  autoOpen:false,
  width:400
 });

 $('#addif').click(function(){
  $('#user_dialog_if').dialog('option', 'title', 'Agregar Item');
  $('#item_if').val('');
  $('#m_asi').val('');
  $('#m_eje').val('');
  $('#diferencia').val('');
  $('#saveif').text('Save');
  $('#user_dialog_if').dialog('open');
 });

 /*------------------------------------------*/
 //GENERAR FILA POR ITEM
$('#saveif').click(function(){
 var item_if = '';
 var m_asi = '';
 var m_eje = '';
 var diferencia = '';

 item_if = $('#item_if').val();
 m_asi = $('#m_asi').val();
 m_eje = $('#m_eje').val();
 diferencia = $('#diferencia').val();

 if($('#saveif').text() == 'Save')
   {
    count = count + 1;
    output = '<tr id="row1_'+count+'">';
    output += '<td colspan="3" width="65%">'+item_if+' <input type="hidden" name="hidden_item_if[]" id="item_if'+count+'" class="item_if" value="'+item_if+'" /></td>';
    output += '<td colspan="1" width="10%">'+m_asi+' <input type="hidden" name="hidden_m_asi[]" id="m_asi'+count+'" value="'+m_asi+'" /></td>';
    output += '<td colspan="1" width="10%">'+m_eje+' <input type="hidden" name="hidden_m_eje[]" id="m_eje'+count+'" value="'+m_eje+'" /></td>';
    output += '<td colspan="1" width="10%">'+diferencia+' <input type="hidden" name="hidden_diferencia[]" id="diferencia'+count+'" value="'+diferencia+'" /></td>';
    output += '<td colspan="1" align="center"><button type="button" name="view_details_if" class="btn btn-info btn-xs view_details_if" id="'+count+'">Ver</button></td>';
    output += '<td colspan="1" align="center"><button type="button" name="remove_details_if" class="btn btn-danger btn-xs remove_details_if" id="'+count+'">X</button></td>';
    output += '</tr>';
     $('#table_if').append(output);
   }
   else
   {
    var row1_idif = $('#hidden_row_idif').val();
    output = '<td colspan="3" width="65%">'+item_if+' <input type="hidden" name="hidden_item_if[]" id="item_if'+row1_idif+'" class="item_if" value="'+item_if+'" /></td>';
    output += '<td colspan="1" width="10%">'+m_asi+' <input type="hidden" name="hidden_m_asi[]" id="m_asi'+row1_idif+'" value="'+m_asi+'" /></td>';
    output += '<td colspan="1" width="10%">'+m_eje+' <input type="hidden" name="hidden_m_eje[]" id="m_eje'+row1_idif+'" value="'+m_eje+'" /></td>';
    output += '<td colspan="1" width="10%">'+diferencia+' <input type="hidden" name="hidden_diferencia[]" id="diferencia'+row1_idif+'" value="'+diferencia+'" /></td>';
    output += '<td colspan="1" align="center"><button type="button" name="view_details_if" class="btn btn-warning btn-xs view_details_if" id="'+row1_idif+'">Ver</button></td>';
    output += '<td colspan="1" align="center"><button type="button" name="remove_details_if" class="btn btn-danger btn-xs remove_details_if" id="'+row1_idif+'">X</button></td>';
    $('#row1_'+row1_idif+'').html(output);
   }

   $('#user_dialog_if').dialog('close');
 });

$(document).on('click', '.view_details_if', function(){
  var row1_idif = $(this).attr("id");
  var item_if = $('#item_if'+row1_idif+'').val();
  var m_asi = $('#m_asi'+row1_idif+'').val();
  var m_eje = $('#m_eje'+row1_idif+'').val();
  var diferencia = $('#diferencia'+row1_idif+'').val();
  $('#item_if').val(item_if);
  $('#m_asi').val(m_asi);
  $('#m_eje').val(m_eje);
  $('#diferencia').val(diferencia);
  $('#saveif').text('Edit');
  $('#hidden_row_idif').val(row1_idif);
  $('#user_dialog_if').dialog('option', 'title', 'Modificar Item');
  $('#user_dialog_if').dialog('open');
 });

 $(document).on('click', '.remove_details_if', function(){
  var row1_idif = $(this).attr("id");
  if(confirm("Seguro de eliminar fila?"))
  {
   $('#row1_'+row1_idif+'').remove();
  }
  else
  {
   return false;
  }
 });

 $('#action_alert').dialog({
  autoOpen:false
 });

 $('#user_form').on('submit', function(event){
  event.preventDefault();
  var count_data = 0;
  $('.item_if').each(function(){
   count_data = count_data + 1;
  });
  if(count_data > 0)
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"conexion.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#table_if').find("tr:gt(1)").remove();
     $('#action_alert').html('<p>Data insertada</p>');
     $('#action_alert').dialog('open');
    }
   })
  }
  else
  {
   $('#action_alert').html('<p>Agregue algun dato</p>');
   $('#action_alert').dialog('open');
  }
 });

});
</script>

<script>  
$(document).ready(function(){ 
 
 var count = 0;

//Muestra cuadro de dialogo de actividades 
 $('#user_dialog').dialog({
  autoOpen:false,
  width:400
 });

 $('#add').click(function(){
  $('#user_dialog').dialog('option', 'title', 'Agregar Actividad');
  $('#item_a').val('');
  $('#avance').val('');
  $('#observaciones').val('');
  $('#saveif').text('Save');
  $('#user_dialog').dialog('open');
 });
/*------------------------------------------*/
//GENERAR FILA POR ACTIVIDAD
 $('#save').click(function(){

  var item_a = '';
  var avance = '';
  var observaciones = '';

   item_a = $('#item_a').val();
   avance = $('#avance').val();
   observaciones = $('#observaciones').val();

   if($('#save').text() == 'Save')
   {
    count = count + 1;
    output = '<tr id="row_'+count+'">';
    output += '<td colspan="3">'+item_a+' <input type="hidden" name="hidden_item_a[]" id="item_a'+count+'" class="item_a" value="'+item_a+'" /></td>';
    output += '<td colspan="1">'+avance+' <input type="hidden" name="hidden_avance[]" id="avance'+count+'" value="'+avance+'" /></td>';
    output += '<td colspan="2">'+observaciones+' <input type="hidden" name="hidden_obs[]" id="observaciones'+count+'" value="'+observaciones+'" /></td>';
    output += '<td colspan="1" align="center"><button type="button" name="view_details" class="btn btn-info btn-xs view_details" id="'+count+'">Ver</button></td>';
    output += '<td colspan="1" align="center"><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+count+'">X</button></td>';
    output += '</tr>';
    $('#user_data').append(output);
   }
   else
   {
    var row_id = $('#hidden_row_id').val();
    output = '<td colspan="3">'+item_a+' <input type="hidden" name="hidden_item_a[]" id="item_a'+row_id+'" class="item_a" value="'+item_a+'" /></td>';
    output += '<td colspan="1">'+avance+' <input type="hidden" name="hidden_avance[]" id="avance'+row_id+'" value="'+avance+'" /></td>';
    output += '<td colspan="2">'+observaciones+' <input type="hidden" name="hidden_obs[]" id="observaciones'+row_id+'" value="'+observaciones+'" /></td>';
    output += '<td colspan="1" align="center"><button type="button" name="view_details" class="btn btn-info btn-xs view_details" id="'+row_id+'">Ver</button></td>';
    output += '<td colspan="1" align="center"><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+row_id+'">X</button></td>';
    $('#row_'+row_id+'').html(output);
   }

   $('#user_dialog').dialog('close');
 });
 /*------------------------------------------*/
 
$(document).on('click', '.view_details', function(){
  var row_id = $(this).attr("id");
  var item_a = $('#item_a'+row_id+'').val();
  var avance = $('#avance'+row_id+'').val();
  var observaciones = $('#observaciones'+row_id+'').val();
  $('#item_a').val(item_a);
  $('#avance').val(avance);
  $('#observaciones').val(observaciones);
  $('#save').text('Edit');
  $('#hidden_row_id').val(row_id);
  $('#user_dialog').dialog('option', 'title', 'Modificar Registro');
  $('#user_dialog').dialog('open');
 });

 $(document).on('click', '.remove_details', function(){
  var row_id = $(this).attr("id");
  if(confirm("Seguro de eliminar fila?"))
  {
   $('#row_'+row_id+'').remove();
  }
  else
  {
   return false;
  }
 });

 $('#action_alert').dialog({
  autoOpen:false
 });

 $('#user_form').on('submit', function(event){
  event.preventDefault();
  var count_data = 0;
  $('.item_a').each(function(){
   count_data = count_data + 1;
  });
  if(count_data > 0)
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"conexion.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#user_data').find("tr:gt(1)").remove();
     $('#action_alert').html('<p>Data insertada</p>');
     $('#action_alert').dialog('open');
    }
   })
  }
  else
  {
   $('#action_alert').html('<p>Agregue algun dato</p>');
   $('#action_alert').dialog('open');
  }
 });
 
});  
</script>

<script>
$(document).ready(function(){ 
 
 var count = 0;

 $('#user_dialog_e').dialog({
  autoOpen:false,
  width:400
 });

 $('#adde').click(function(){
  $('#user_dialog_e').dialog('option', 'title', 'Agregar Objetivo Especifico');
  $('#obj_e').val('');
  $('#avance_e').val('');
  $('#saveoe').text('Save');
  $('#user_dialog_e').dialog('open');
 });

 $('#saveoe').click(function(){
 var obj_e = '';
 var avance_e = '';
 obj_e= $('#obj_e').val();
 avance_e = $('#avance_e').val();
 if($('#saveoe').text() == 'Save')
   {
    count = count + 1;
    output = '<tr id="row3_'+count+'">';
    output += '<td colspan="5">'+obj_e+' <input type="hidden" name="hidden_obj_e[]" id="obj_e'+count+'" class="obj_e" value="'+obj_e+'" /></td>';
    output += '<td colspan="1" width="20%">'+avance_e+' <input type="hidden" name="hidden_avance_e[]" id="avance_e'+count+'" value="'+avance_e+'" /></td>';
    output += '<td colspan="1" align="center"><button type="button" name="view_details_oe" class="btn btn-info btn-xs view_details_oe" id="'+count+'">Ver</button></td>';
    output += '<td colspan="1" align="center"><button type="button" name="remove_details_oe" class="btn btn-danger btn-xs remove_details_oe" id="'+count+'">X</button></td>';
    output += '</tr>';
     $('#table_obj').append(output);
   }
   else
  
   {
    var row3_idoe = $('#hidden_row_idoe').val();
    output = '<td colspan="5">'+obj_e+' <input type="hidden" name="hidden_obj_e[]" id="obj_e'+row3_idoe+'" class="obj_e" value="'+obj_e+'" /></td>';
    output += '<td colspan="1" width="20%">'+avance_e+' <input type="hidden" name="hidden_avance_e[]" id="avance_e'+row3_idoe+'" value="'+avance_e+'" /></td>';
    output += '<td colspan="1" align="center"><button type="button" name="view_details_oe" class="btn btn-info btn-xs view_details_oe" id="'+row3_idoe+'">Ver</button></td>';
    output += '<td colspan="1" align="center"><button type="button" name="remove_details_oe" class="btn btn-danger btn-xs remove_details_oe" id="'+row3_idoe+'">X</button></td>';
    $('#row3_'+row3_idoe+'').html(output);
   }

   $('#user_dialog_e').dialog('close');
 });

 $(document).on('click', '.view_details_oe', function(){
  var row3_idoe = $(this).attr("id");
  var obj_e = $('#obj_e'+row3_idoe+'').val();
  var avance_e = $('#avance_e'+row3_idoe+'').val();
  $('#obj_e').val(obj_e);
  $('#avance_e').val(avance_e);
  $('#saveoe').text('Edit');
  $('#hidden_row_idoe').val(row3_idoe);
  $('#user_dialog_e').dialog('option', 'title', 'Modificar Objetivo Especifico');
   $('#user_dialog_e').dialog('open');
});
$(document).on('click', '.remove_details_oe', function(){
  var row3_idoe = $(this).attr("id");
  if(confirm("Seguro de eliminar fila?"))
  {
   $('#row3_'+row3_idoe+'').remove();
  }
  else
   {
   return false;
  }
 });

 $('#action_alert').dialog({
  autoOpen:false
 });
 $('#user_form').on('submit', function(event){
  event.preventDefault();
  var count_data = 0;
  $('.obj_e').each(function(){
   count_data = count_data + 1;
  });
  if(count_data > 0)
  {
    var form_data = $(this).serialize();
   $.ajax({
    url:"conexion.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#table_obj').find("tr:gt(1)").remove();
     $('#action_alert').html('<p>Data insertada</p>');
     $('#action_alert').dialog('open');
    }
   })
 }
  else
  {
   $('#action_alert').html('<p>Agregue algun dato</p>');
   $('#action_alert').dialog('open');
  }
 });
});  
</script>