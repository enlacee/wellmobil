<?php /*%%SmartyHeaderCode:712082142502278dbd577f7-09916191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb669023950c29719bac9ad0fab891ac18fb23f9' => 
    array (
      0 => './templates/admin.tpl',
      1 => 1344440064,
      2 => 'file',
    ),
    '97c13ae6868bbc459509c9f1b968154acd23eecc' => 
    array (
      0 => './templates/header.tpl',
      1 => 1344439942,
      2 => 'file',
    ),
    '3a4f6f0d327fc7bc3ea86f63906a1bf934ca50c7' => 
    array (
      0 => './templates/footer.tpl',
      1 => 1344439915,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '712082142502278dbd577f7-09916191',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50228705d62407_06883883',
  'variables' => 
  array (
    'menu' => 0,
    'data' => 0,
    'data1' => 0,
  ),
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50228705d62407_06883883')) {function content_50228705d62407_06883883($_smarty_tpl) {?><!DOCTYPE html> 
<html> 
<head> 
	<title></title> 
	<meta charset="utf-8"> 
	<link rel="stylesheet" href="templates/style.css" />
	<script type="text/javascript" src="libs/jquery.js"></script>
	
	<script language="javascript">
	function muestraReloj()
	{
		// Compruebo si se puede ejecutar el script en el navegador del usuario
		if (!document.layers && !document.all && !document.getElementById) return;
		// Obtengo la hora actual y la divido en sus partes
		var fechacompleta = new Date();
		var horas = fechacompleta.getHours();
		var minutos = fechacompleta.getMinutes();
		var segundos = fechacompleta.getSeconds();
		var mt = "AM";
		// Pongo el formato 12 horas
		if (horas> 12) 
		{
			mt = "PM";
			horas = horas - 12;
		}

		if (horas == 0) horas = 12;
		// Pongo minutos y segundos con dos dígitos
		if (minutos <= 9) minutos = "0" + minutos;
		if (segundos <= 9) segundos = "0" + segundos;
		// En la variable 'cadenareloj' puedes cambiar los colores y el tipo de fuente
		cadenareloj = "<font size='1' face='verdana'><b>" + horas + ":" + minutos + ":" + segundos + " " + mt + "</b></font>";
		// Escribo el reloj de una manera u otra, según el navegador del usuario
		if (document.layers) 
		{
			document.layers.spanreloj.document.write(cadenareloj);
			document.layers.spanreloj.document.close();
		}
		else if (document.all) spanreloj.innerHTML = cadenareloj;
		else if (document.getElementById) document.getElementById("spanreloj").innerHTML = cadenareloj;
		// Ejecuto la función con un intervalo de un segundo
		setTimeout("muestraReloj()", 1000);
	}
	</script>
	
</head>
<body onLoad="muestraReloj()">
<div id='content'>
	<div class='content'>
<h1>Administracion</h1>
<div id='menu'>
	<div class='menu'><a href='salir'>Salir</a></div><div class='menu'><a href='admin'>Administracion</a></div>
	</div>
<div class='clear'></div>
<h2>Gestion de usuarios</h2>
<a name='ajaxCRUD1' id='ajaxCRUD1'></a>
<div id='usuarios'>
<table align='center' class='ajaxCRUD' name='table_usuarios' id='table_usuarios' cellspacing='' border=0>
<tr>
<th><a href='javascript:;' onClick="changeSort('usuarios', 'id', 'desc');" >id</a></th><th><a href='javascript:;' onClick="changeSort('usuarios', 'user', 'desc');" >user</a></th><th><a href='javascript:;' onClick="changeSort('usuarios', 'pass', 'desc');" >pass</a></th><th>Action</th>
</tr>
<tr class='odd' id="usuarios_row_1" valign='top'>
<td>1</td><td><span class="editable hand_cursor" id="usuariosuser1_show" onClick="
			document.getElementById('usuariosuser1_edit').style.display = '';
			document.getElementById('usuariosuser1_show').style.display = 'none';
			document.getElementById('text_usuariosuser1').focus();
            ">camiloalex1643</span>
        <span id="usuariosuser1_edit" style="display: none;">
            <form style="display: inline;" name="form_usuariosuser1" id="form_usuariosuser1" onsubmit="
				document.getElementById('usuariosuser1_edit').style.display='none';
				document.getElementById('usuariosuser1_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=1&field=user&table=usuarios&pk=id&val=' + escape(document.getElementById('text_usuariosuser1').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_usuariosuser1" name="text_usuariosuser1" type="text" class="editingSize editMode" size="14" value="camiloalex1643"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('usuariosuser1_show').style.display = '';
				document.getElementById('usuariosuser1_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="usuariosuser1_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="usuariospass1_show" onClick="
			document.getElementById('usuariospass1_edit').style.display = '';
			document.getElementById('usuariospass1_show').style.display = 'none';
			document.getElementById('text_usuariospass1').focus();
            ">123456</span>
        <span id="usuariospass1_edit" style="display: none;">
            <form style="display: inline;" name="form_usuariospass1" id="form_usuariospass1" onsubmit="
				document.getElementById('usuariospass1_edit').style.display='none';
				document.getElementById('usuariospass1_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=1&field=pass&table=usuarios&pk=id&val=' + escape(document.getElementById('text_usuariospass1').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_usuariospass1" name="text_usuariospass1" type="text" class="editingSize editMode" size="6" value="123456"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('usuariospass1_show').style.display = '';
				document.getElementById('usuariospass1_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="usuariospass1_save" class="savingAjaxWithBackground">Saving...</span></td><td>
<input type="button" class="editingSize" onClick="confirmDelete('1', 'usuarios', 'id');" value="Eliminar" />
</td>
</tr><tr class='cell_row' id="usuarios_row_2" valign='top'>
<td>2</td><td><span class="editable hand_cursor" id="usuariosuser2_show" onClick="
			document.getElementById('usuariosuser2_edit').style.display = '';
			document.getElementById('usuariosuser2_show').style.display = 'none';
			document.getElementById('text_usuariosuser2').focus();
            ">salomon</span>
        <span id="usuariosuser2_edit" style="display: none;">
            <form style="display: inline;" name="form_usuariosuser2" id="form_usuariosuser2" onsubmit="
				document.getElementById('usuariosuser2_edit').style.display='none';
				document.getElementById('usuariosuser2_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=2&field=user&table=usuarios&pk=id&val=' + escape(document.getElementById('text_usuariosuser2').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_usuariosuser2" name="text_usuariosuser2" type="text" class="editingSize editMode" size="7" value="salomon"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('usuariosuser2_show').style.display = '';
				document.getElementById('usuariosuser2_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="usuariosuser2_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="usuariospass2_show" onClick="
			document.getElementById('usuariospass2_edit').style.display = '';
			document.getElementById('usuariospass2_show').style.display = 'none';
			document.getElementById('text_usuariospass2').focus();
            ">salomon</span>
        <span id="usuariospass2_edit" style="display: none;">
            <form style="display: inline;" name="form_usuariospass2" id="form_usuariospass2" onsubmit="
				document.getElementById('usuariospass2_edit').style.display='none';
				document.getElementById('usuariospass2_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=2&field=pass&table=usuarios&pk=id&val=' + escape(document.getElementById('text_usuariospass2').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_usuariospass2" name="text_usuariospass2" type="text" class="editingSize editMode" size="7" value="salomon"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('usuariospass2_show').style.display = '';
				document.getElementById('usuariospass2_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="usuariospass2_save" class="savingAjaxWithBackground">Saving...</span></td><td>
<input type="button" class="editingSize" onClick="confirmDelete('2', 'usuarios', 'id');" value="Eliminar" />
</td>
</tr><tr class='odd' id="usuarios_row_4" valign='top'>
<td>4</td><td><span class="editable hand_cursor" id="usuariosuser4_show" onClick="
			document.getElementById('usuariosuser4_edit').style.display = '';
			document.getElementById('usuariosuser4_show').style.display = 'none';
			document.getElementById('text_usuariosuser4').focus();
            ">demo</span>
        <span id="usuariosuser4_edit" style="display: none;">
            <form style="display: inline;" name="form_usuariosuser4" id="form_usuariosuser4" onsubmit="
				document.getElementById('usuariosuser4_edit').style.display='none';
				document.getElementById('usuariosuser4_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=4&field=user&table=usuarios&pk=id&val=' + escape(document.getElementById('text_usuariosuser4').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_usuariosuser4" name="text_usuariosuser4" type="text" class="editingSize editMode" size="4" value="demo"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('usuariosuser4_show').style.display = '';
				document.getElementById('usuariosuser4_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="usuariosuser4_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="usuariospass4_show" onClick="
			document.getElementById('usuariospass4_edit').style.display = '';
			document.getElementById('usuariospass4_show').style.display = 'none';
			document.getElementById('text_usuariospass4').focus();
            ">demo</span>
        <span id="usuariospass4_edit" style="display: none;">
            <form style="display: inline;" name="form_usuariospass4" id="form_usuariospass4" onsubmit="
				document.getElementById('usuariospass4_edit').style.display='none';
				document.getElementById('usuariospass4_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=4&field=pass&table=usuarios&pk=id&val=' + escape(document.getElementById('text_usuariospass4').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_usuariospass4" name="text_usuariospass4" type="text" class="editingSize editMode" size="4" value="demo"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('usuariospass4_show').style.display = '';
				document.getElementById('usuariospass4_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="usuariospass4_save" class="savingAjaxWithBackground">Saving...</span></td><td>
<input type="button" class="editingSize" onClick="confirmDelete('4', 'usuarios', 'id');" value="Eliminar" />
</td>
</tr></table>
</div><br />
<center>
   <input type="button" value="Insertar Usuarios" class="btn editingSize" onClick="$('#add_form_usuarios').slideDown('slow');">
</center>
<form action="/wellmobil/admin.php#ajaxCRUD" id="add_form_usuarios" method="POST" ENCTYPE="multipart/form-data" style="display:none;">
<br /><h3>New <b>Usuarios</b></h3>
<table align='center' name='form'>
<tr valign='top'>
<th width='20%'>user</th><td><input  onKeyPress="" class="editingSize " type="text" id="user" name="user" size="" value="" maxlength="150"></td></tr>
<th width='20%'>pass</th><td><input  onKeyPress="" class="editingSize " type="text" id="pass" name="pass" size="" value="" maxlength="150"></td></tr>
</tr><tr><td>
<input class="editingSize" type="button" onClick="validateAddForm('usuarios', false);" value="Save Usuarios"></td><td><input style='float: right;' class="editingSize" type="button" onClick="this.form.reset();$('#add_form_usuarios').slideUp('slow');" value="Cancel"></td></tr>
</table>
<input type="hidden" name="action" value="add">
<input type="hidden" name="table" value="usuarios">
</form>

<br/><br/>
<div class='clear'></div>
<h2>Gestion de parametris</h2>
<a name='ajaxCRUD2' id='ajaxCRUD2'></a>
<div id='parametros'>
<table align='center' class='ajaxCRUD' name='table_parametros' id='table_parametros' cellspacing='' border=0>
<tr>
<th><a href='javascript:;' onClick="changeSort('parametros', 'id', 'desc');" >id</a></th><th><a href='javascript:;' onClick="changeSort('parametros', 'slot', 'desc');" >slot</a></th><th><a href='javascript:;' onClick="changeSort('parametros', 'parametro', 'desc');" >parametro</a></th><th><a href='javascript:;' onClick="changeSort('parametros', 'medida', 'desc');" >medida</a></th><th>Action</th>
</tr>
<tr class='odd' id="parametros_row_1" valign='top'>
<td>1</td><td><span class="editable hand_cursor" id="parametrosslot1_show" onClick="
			document.getElementById('parametrosslot1_edit').style.display = '';
			document.getElementById('parametrosslot1_show').style.display = 'none';
			document.getElementById('text_parametrosslot1').focus();
            ">0110</span>
        <span id="parametrosslot1_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosslot1" id="form_parametrosslot1" onsubmit="
				document.getElementById('parametrosslot1_edit').style.display='none';
				document.getElementById('parametrosslot1_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=1&field=slot&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosslot1').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosslot1" name="text_parametrosslot1" type="text" class="editingSize editMode" size="4" value="0110"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosslot1_show').style.display = '';
				document.getElementById('parametrosslot1_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosslot1_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosparametro1_show" onClick="
			document.getElementById('parametrosparametro1_edit').style.display = '';
			document.getElementById('parametrosparametro1_show').style.display = 'none';
			document.getElementById('text_parametrosparametro1').focus();
            ">Total Depth</span>
        <span id="parametrosparametro1_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosparametro1" id="form_parametrosparametro1" onsubmit="
				document.getElementById('parametrosparametro1_edit').style.display='none';
				document.getElementById('parametrosparametro1_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=1&field=parametro&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosparametro1').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosparametro1" name="text_parametrosparametro1" type="text" class="editingSize editMode" size="11" value="Total Depth"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosparametro1_show').style.display = '';
				document.getElementById('parametrosparametro1_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosparametro1_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosmedida1_show" onClick="
			document.getElementById('parametrosmedida1_edit').style.display = '';
			document.getElementById('parametrosmedida1_show').style.display = 'none';
			document.getElementById('text_parametrosmedida1').focus();
            ">feet</span>
        <span id="parametrosmedida1_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosmedida1" id="form_parametrosmedida1" onsubmit="
				document.getElementById('parametrosmedida1_edit').style.display='none';
				document.getElementById('parametrosmedida1_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=1&field=medida&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosmedida1').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosmedida1" name="text_parametrosmedida1" type="text" class="editingSize editMode" size="4" value="feet"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosmedida1_show').style.display = '';
				document.getElementById('parametrosmedida1_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosmedida1_save" class="savingAjaxWithBackground">Saving...</span></td><td>
<input type="button" class="editingSize" onClick="confirmDelete('1', 'parametros', 'id');" value="Eliminar" />
</td>
</tr><tr class='cell_row' id="parametros_row_2" valign='top'>
<td>2</td><td><span class="editable hand_cursor" id="parametrosslot2_show" onClick="
			document.getElementById('parametrosslot2_edit').style.display = '';
			document.getElementById('parametrosslot2_show').style.display = 'none';
			document.getElementById('text_parametrosslot2').focus();
            ">1218</span>
        <span id="parametrosslot2_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosslot2" id="form_parametrosslot2" onsubmit="
				document.getElementById('parametrosslot2_edit').style.display='none';
				document.getElementById('parametrosslot2_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=2&field=slot&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosslot2').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosslot2" name="text_parametrosslot2" type="text" class="editingSize editMode" size="4" value="1218"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosslot2_show').style.display = '';
				document.getElementById('parametrosslot2_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosslot2_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosparametro2_show" onClick="
			document.getElementById('parametrosparametro2_edit').style.display = '';
			document.getElementById('parametrosparametro2_show').style.display = 'none';
			document.getElementById('text_parametrosparametro2').focus();
            ">NC5</span>
        <span id="parametrosparametro2_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosparametro2" id="form_parametrosparametro2" onsubmit="
				document.getElementById('parametrosparametro2_edit').style.display='none';
				document.getElementById('parametrosparametro2_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=2&field=parametro&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosparametro2').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosparametro2" name="text_parametrosparametro2" type="text" class="editingSize editMode" size="3" value="NC5"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosparametro2_show').style.display = '';
				document.getElementById('parametrosparametro2_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosparametro2_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosmedida2_show" onClick="
			document.getElementById('parametrosmedida2_edit').style.display = '';
			document.getElementById('parametrosmedida2_show').style.display = 'none';
			document.getElementById('text_parametrosmedida2').focus();
            ">ppm</span>
        <span id="parametrosmedida2_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosmedida2" id="form_parametrosmedida2" onsubmit="
				document.getElementById('parametrosmedida2_edit').style.display='none';
				document.getElementById('parametrosmedida2_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=2&field=medida&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosmedida2').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosmedida2" name="text_parametrosmedida2" type="text" class="editingSize editMode" size="3" value="ppm"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosmedida2_show').style.display = '';
				document.getElementById('parametrosmedida2_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosmedida2_save" class="savingAjaxWithBackground">Saving...</span></td><td>
<input type="button" class="editingSize" onClick="confirmDelete('2', 'parametros', 'id');" value="Eliminar" />
</td>
</tr><tr class='odd' id="parametros_row_3" valign='top'>
<td>3</td><td><span class="editable hand_cursor" id="parametrosslot3_show" onClick="
			document.getElementById('parametrosslot3_edit').style.display = '';
			document.getElementById('parametrosslot3_show').style.display = 'none';
			document.getElementById('text_parametrosslot3').focus();
            ">0108</span>
        <span id="parametrosslot3_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosslot3" id="form_parametrosslot3" onsubmit="
				document.getElementById('parametrosslot3_edit').style.display='none';
				document.getElementById('parametrosslot3_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=3&field=slot&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosslot3').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosslot3" name="text_parametrosslot3" type="text" class="editingSize editMode" size="4" value="0108"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosslot3_show').style.display = '';
				document.getElementById('parametrosslot3_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosslot3_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosparametro3_show" onClick="
			document.getElementById('parametrosparametro3_edit').style.display = '';
			document.getElementById('parametrosparametro3_show').style.display = 'none';
			document.getElementById('text_parametrosparametro3').focus();
            ">Bit Depth</span>
        <span id="parametrosparametro3_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosparametro3" id="form_parametrosparametro3" onsubmit="
				document.getElementById('parametrosparametro3_edit').style.display='none';
				document.getElementById('parametrosparametro3_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=3&field=parametro&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosparametro3').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosparametro3" name="text_parametrosparametro3" type="text" class="editingSize editMode" size="9" value="Bit Depth"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosparametro3_show').style.display = '';
				document.getElementById('parametrosparametro3_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosparametro3_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosmedida3_show" onClick="
			document.getElementById('parametrosmedida3_edit').style.display = '';
			document.getElementById('parametrosmedida3_show').style.display = 'none';
			document.getElementById('text_parametrosmedida3').focus();
            ">feet</span>
        <span id="parametrosmedida3_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosmedida3" id="form_parametrosmedida3" onsubmit="
				document.getElementById('parametrosmedida3_edit').style.display='none';
				document.getElementById('parametrosmedida3_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=3&field=medida&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosmedida3').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosmedida3" name="text_parametrosmedida3" type="text" class="editingSize editMode" size="4" value="feet"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosmedida3_show').style.display = '';
				document.getElementById('parametrosmedida3_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosmedida3_save" class="savingAjaxWithBackground">Saving...</span></td><td>
<input type="button" class="editingSize" onClick="confirmDelete('3', 'parametros', 'id');" value="Eliminar" />
</td>
</tr><tr class='cell_row' id="parametros_row_4" valign='top'>
<td>4</td><td><span class="editable hand_cursor" id="parametrosslot4_show" onClick="
			document.getElementById('parametrosslot4_edit').style.display = '';
			document.getElementById('parametrosslot4_show').style.display = 'none';
			document.getElementById('text_parametrosslot4').focus();
            ">0012</span>
        <span id="parametrosslot4_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosslot4" id="form_parametrosslot4" onsubmit="
				document.getElementById('parametrosslot4_edit').style.display='none';
				document.getElementById('parametrosslot4_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=4&field=slot&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosslot4').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosslot4" name="text_parametrosslot4" type="text" class="editingSize editMode" size="4" value="0012"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosslot4_show').style.display = '';
				document.getElementById('parametrosslot4_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosslot4_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosparametro4_show" onClick="
			document.getElementById('parametrosparametro4_edit').style.display = '';
			document.getElementById('parametrosparametro4_show').style.display = 'none';
			document.getElementById('text_parametrosparametro4').focus();
            ">Block Position</span>
        <span id="parametrosparametro4_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosparametro4" id="form_parametrosparametro4" onsubmit="
				document.getElementById('parametrosparametro4_edit').style.display='none';
				document.getElementById('parametrosparametro4_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=4&field=parametro&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosparametro4').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosparametro4" name="text_parametrosparametro4" type="text" class="editingSize editMode" size="14" value="Block Position"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosparametro4_show').style.display = '';
				document.getElementById('parametrosparametro4_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosparametro4_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosmedida4_show" onClick="
			document.getElementById('parametrosmedida4_edit').style.display = '';
			document.getElementById('parametrosmedida4_show').style.display = 'none';
			document.getElementById('text_parametrosmedida4').focus();
            ">feet</span>
        <span id="parametrosmedida4_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosmedida4" id="form_parametrosmedida4" onsubmit="
				document.getElementById('parametrosmedida4_edit').style.display='none';
				document.getElementById('parametrosmedida4_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=4&field=medida&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosmedida4').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosmedida4" name="text_parametrosmedida4" type="text" class="editingSize editMode" size="4" value="feet"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosmedida4_show').style.display = '';
				document.getElementById('parametrosmedida4_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosmedida4_save" class="savingAjaxWithBackground">Saving...</span></td><td>
<input type="button" class="editingSize" onClick="confirmDelete('4', 'parametros', 'id');" value="Eliminar" />
</td>
</tr><tr class='odd' id="parametros_row_5" valign='top'>
<td>5</td><td><span class="editable hand_cursor" id="parametrosslot5_show" onClick="
			document.getElementById('parametrosslot5_edit').style.display = '';
			document.getElementById('parametrosslot5_show').style.display = 'none';
			document.getElementById('text_parametrosslot5').focus();
            ">0145</span>
        <span id="parametrosslot5_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosslot5" id="form_parametrosslot5" onsubmit="
				document.getElementById('parametrosslot5_edit').style.display='none';
				document.getElementById('parametrosslot5_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=5&field=slot&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosslot5').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosslot5" name="text_parametrosslot5" type="text" class="editingSize editMode" size="4" value="0145"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosslot5_show').style.display = '';
				document.getElementById('parametrosslot5_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosslot5_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosparametro5_show" onClick="
			document.getElementById('parametrosparametro5_edit').style.display = '';
			document.getElementById('parametrosparametro5_show').style.display = 'none';
			document.getElementById('text_parametrosparametro5').focus();
            ">Gan/Perd</span>
        <span id="parametrosparametro5_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosparametro5" id="form_parametrosparametro5" onsubmit="
				document.getElementById('parametrosparametro5_edit').style.display='none';
				document.getElementById('parametrosparametro5_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=5&field=parametro&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosparametro5').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosparametro5" name="text_parametrosparametro5" type="text" class="editingSize editMode" size="8" value="Gan/Perd"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosparametro5_show').style.display = '';
				document.getElementById('parametrosparametro5_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosparametro5_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosmedida5_show" onClick="
			document.getElementById('parametrosmedida5_edit').style.display = '';
			document.getElementById('parametrosmedida5_show').style.display = 'none';
			document.getElementById('text_parametrosmedida5').focus();
            ">--</span>
        <span id="parametrosmedida5_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosmedida5" id="form_parametrosmedida5" onsubmit="
				document.getElementById('parametrosmedida5_edit').style.display='none';
				document.getElementById('parametrosmedida5_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=5&field=medida&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosmedida5').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosmedida5" name="text_parametrosmedida5" type="text" class="editingSize editMode" size="15" value=""/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosmedida5_show').style.display = '';
				document.getElementById('parametrosmedida5_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosmedida5_save" class="savingAjaxWithBackground">Saving...</span></td><td>
<input type="button" class="editingSize" onClick="confirmDelete('5', 'parametros', 'id');" value="Eliminar" />
</td>
</tr><tr class='cell_row' id="parametros_row_6" valign='top'>
<td>6</td><td><span class="editable hand_cursor" id="parametrosslot6_show" onClick="
			document.getElementById('parametrosslot6_edit').style.display = '';
			document.getElementById('parametrosslot6_show').style.display = 'none';
			document.getElementById('text_parametrosslot6').focus();
            ">0140</span>
        <span id="parametrosslot6_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosslot6" id="form_parametrosslot6" onsubmit="
				document.getElementById('parametrosslot6_edit').style.display='none';
				document.getElementById('parametrosslot6_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=6&field=slot&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosslot6').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosslot6" name="text_parametrosslot6" type="text" class="editingSize editMode" size="4" value="0140"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosslot6_show').style.display = '';
				document.getElementById('parametrosslot6_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosslot6_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosparametro6_show" onClick="
			document.getElementById('parametrosparametro6_edit').style.display = '';
			document.getElementById('parametrosparametro6_show').style.display = 'none';
			document.getElementById('text_parametrosparametro6').focus();
            ">Total Gas</span>
        <span id="parametrosparametro6_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosparametro6" id="form_parametrosparametro6" onsubmit="
				document.getElementById('parametrosparametro6_edit').style.display='none';
				document.getElementById('parametrosparametro6_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=6&field=parametro&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosparametro6').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosparametro6" name="text_parametrosparametro6" type="text" class="editingSize editMode" size="9" value="Total Gas"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosparametro6_show').style.display = '';
				document.getElementById('parametrosparametro6_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosparametro6_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosmedida6_show" onClick="
			document.getElementById('parametrosmedida6_edit').style.display = '';
			document.getElementById('parametrosmedida6_show').style.display = 'none';
			document.getElementById('text_parametrosmedida6').focus();
            ">ppm</span>
        <span id="parametrosmedida6_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosmedida6" id="form_parametrosmedida6" onsubmit="
				document.getElementById('parametrosmedida6_edit').style.display='none';
				document.getElementById('parametrosmedida6_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=6&field=medida&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosmedida6').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosmedida6" name="text_parametrosmedida6" type="text" class="editingSize editMode" size="3" value="ppm"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosmedida6_show').style.display = '';
				document.getElementById('parametrosmedida6_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosmedida6_save" class="savingAjaxWithBackground">Saving...</span></td><td>
<input type="button" class="editingSize" onClick="confirmDelete('6', 'parametros', 'id');" value="Eliminar" />
</td>
</tr><tr class='odd' id="parametros_row_7" valign='top'>
<td>7</td><td><span class="editable hand_cursor" id="parametrosslot7_show" onClick="
			document.getElementById('parametrosslot7_edit').style.display = '';
			document.getElementById('parametrosslot7_show').style.display = 'none';
			document.getElementById('text_parametrosslot7').focus();
            ">0114</span>
        <span id="parametrosslot7_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosslot7" id="form_parametrosslot7" onsubmit="
				document.getElementById('parametrosslot7_edit').style.display='none';
				document.getElementById('parametrosslot7_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=7&field=slot&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosslot7').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosslot7" name="text_parametrosslot7" type="text" class="editingSize editMode" size="4" value="0114"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosslot7_show').style.display = '';
				document.getElementById('parametrosslot7_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosslot7_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosparametro7_show" onClick="
			document.getElementById('parametrosparametro7_edit').style.display = '';
			document.getElementById('parametrosparametro7_show').style.display = 'none';
			document.getElementById('text_parametrosparametro7').focus();
            ">Hook Load</span>
        <span id="parametrosparametro7_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosparametro7" id="form_parametrosparametro7" onsubmit="
				document.getElementById('parametrosparametro7_edit').style.display='none';
				document.getElementById('parametrosparametro7_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=7&field=parametro&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosparametro7').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosparametro7" name="text_parametrosparametro7" type="text" class="editingSize editMode" size="9" value="Hook Load"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosparametro7_show').style.display = '';
				document.getElementById('parametrosparametro7_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosparametro7_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosmedida7_show" onClick="
			document.getElementById('parametrosmedida7_edit').style.display = '';
			document.getElementById('parametrosmedida7_show').style.display = 'none';
			document.getElementById('text_parametrosmedida7').focus();
            ">klbs</span>
        <span id="parametrosmedida7_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosmedida7" id="form_parametrosmedida7" onsubmit="
				document.getElementById('parametrosmedida7_edit').style.display='none';
				document.getElementById('parametrosmedida7_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=7&field=medida&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosmedida7').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosmedida7" name="text_parametrosmedida7" type="text" class="editingSize editMode" size="4" value="klbs"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosmedida7_show').style.display = '';
				document.getElementById('parametrosmedida7_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosmedida7_save" class="savingAjaxWithBackground">Saving...</span></td><td>
<input type="button" class="editingSize" onClick="confirmDelete('7', 'parametros', 'id');" value="Eliminar" />
</td>
</tr><tr class='cell_row' id="parametros_row_8" valign='top'>
<td>8</td><td><span class="editable hand_cursor" id="parametrosslot8_show" onClick="
			document.getElementById('parametrosslot8_edit').style.display = '';
			document.getElementById('parametrosslot8_show').style.display = 'none';
			document.getElementById('text_parametrosslot8').focus();
            ">0139</span>
        <span id="parametrosslot8_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosslot8" id="form_parametrosslot8" onsubmit="
				document.getElementById('parametrosslot8_edit').style.display='none';
				document.getElementById('parametrosslot8_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=8&field=slot&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosslot8').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosslot8" name="text_parametrosslot8" type="text" class="editingSize editMode" size="4" value="0139"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosslot8_show').style.display = '';
				document.getElementById('parametrosslot8_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosslot8_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosparametro8_show" onClick="
			document.getElementById('parametrosparametro8_edit').style.display = '';
			document.getElementById('parametrosparametro8_show').style.display = 'none';
			document.getElementById('text_parametrosparametro8').focus();
            ">Lag Depth</span>
        <span id="parametrosparametro8_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosparametro8" id="form_parametrosparametro8" onsubmit="
				document.getElementById('parametrosparametro8_edit').style.display='none';
				document.getElementById('parametrosparametro8_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=8&field=parametro&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosparametro8').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosparametro8" name="text_parametrosparametro8" type="text" class="editingSize editMode" size="9" value="Lag Depth"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosparametro8_show').style.display = '';
				document.getElementById('parametrosparametro8_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosparametro8_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosmedida8_show" onClick="
			document.getElementById('parametrosmedida8_edit').style.display = '';
			document.getElementById('parametrosmedida8_show').style.display = 'none';
			document.getElementById('text_parametrosmedida8').focus();
            ">--</span>
        <span id="parametrosmedida8_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosmedida8" id="form_parametrosmedida8" onsubmit="
				document.getElementById('parametrosmedida8_edit').style.display='none';
				document.getElementById('parametrosmedida8_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=8&field=medida&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosmedida8').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosmedida8" name="text_parametrosmedida8" type="text" class="editingSize editMode" size="15" value=""/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosmedida8_show').style.display = '';
				document.getElementById('parametrosmedida8_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosmedida8_save" class="savingAjaxWithBackground">Saving...</span></td><td>
<input type="button" class="editingSize" onClick="confirmDelete('8', 'parametros', 'id');" value="Eliminar" />
</td>
</tr><tr class='odd' id="parametros_row_9" valign='top'>
<td>9</td><td><span class="editable hand_cursor" id="parametrosslot9_show" onClick="
			document.getElementById('parametrosslot9_edit').style.display = '';
			document.getElementById('parametrosslot9_show').style.display = 'none';
			document.getElementById('text_parametrosslot9').focus();
            ">0141</span>
        <span id="parametrosslot9_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosslot9" id="form_parametrosslot9" onsubmit="
				document.getElementById('parametrosslot9_edit').style.display='none';
				document.getElementById('parametrosslot9_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=9&field=slot&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosslot9').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosslot9" name="text_parametrosslot9" type="text" class="editingSize editMode" size="4" value="0141"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosslot9_show').style.display = '';
				document.getElementById('parametrosslot9_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosslot9_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosparametro9_show" onClick="
			document.getElementById('parametrosparametro9_edit').style.display = '';
			document.getElementById('parametrosparametro9_show').style.display = 'none';
			document.getElementById('text_parametrosparametro9').focus();
            ">Reserva1</span>
        <span id="parametrosparametro9_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosparametro9" id="form_parametrosparametro9" onsubmit="
				document.getElementById('parametrosparametro9_edit').style.display='none';
				document.getElementById('parametrosparametro9_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=9&field=parametro&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosparametro9').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosparametro9" name="text_parametrosparametro9" type="text" class="editingSize editMode" size="8" value="Reserva1"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosparametro9_show').style.display = '';
				document.getElementById('parametrosparametro9_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosparametro9_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosmedida9_show" onClick="
			document.getElementById('parametrosmedida9_edit').style.display = '';
			document.getElementById('parametrosmedida9_show').style.display = 'none';
			document.getElementById('text_parametrosmedida9').focus();
            ">bbls</span>
        <span id="parametrosmedida9_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosmedida9" id="form_parametrosmedida9" onsubmit="
				document.getElementById('parametrosmedida9_edit').style.display='none';
				document.getElementById('parametrosmedida9_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=9&field=medida&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosmedida9').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosmedida9" name="text_parametrosmedida9" type="text" class="editingSize editMode" size="4" value="bbls"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosmedida9_show').style.display = '';
				document.getElementById('parametrosmedida9_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosmedida9_save" class="savingAjaxWithBackground">Saving...</span></td><td>
<input type="button" class="editingSize" onClick="confirmDelete('9', 'parametros', 'id');" value="Eliminar" />
</td>
</tr><tr class='cell_row' id="parametros_row_10" valign='top'>
<td>10</td><td><span class="editable hand_cursor" id="parametrosslot10_show" onClick="
			document.getElementById('parametrosslot10_edit').style.display = '';
			document.getElementById('parametrosslot10_show').style.display = 'none';
			document.getElementById('text_parametrosslot10').focus();
            ">0142</span>
        <span id="parametrosslot10_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosslot10" id="form_parametrosslot10" onsubmit="
				document.getElementById('parametrosslot10_edit').style.display='none';
				document.getElementById('parametrosslot10_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=10&field=slot&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosslot10').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosslot10" name="text_parametrosslot10" type="text" class="editingSize editMode" size="4" value="0142"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosslot10_show').style.display = '';
				document.getElementById('parametrosslot10_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosslot10_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosparametro10_show" onClick="
			document.getElementById('parametrosparametro10_edit').style.display = '';
			document.getElementById('parametrosparametro10_show').style.display = 'none';
			document.getElementById('text_parametrosparametro10').focus();
            ">Retorno</span>
        <span id="parametrosparametro10_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosparametro10" id="form_parametrosparametro10" onsubmit="
				document.getElementById('parametrosparametro10_edit').style.display='none';
				document.getElementById('parametrosparametro10_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=10&field=parametro&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosparametro10').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosparametro10" name="text_parametrosparametro10" type="text" class="editingSize editMode" size="7" value="Retorno"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosparametro10_show').style.display = '';
				document.getElementById('parametrosparametro10_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosparametro10_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosmedida10_show" onClick="
			document.getElementById('parametrosmedida10_edit').style.display = '';
			document.getElementById('parametrosmedida10_show').style.display = 'none';
			document.getElementById('text_parametrosmedida10').focus();
            ">bbls</span>
        <span id="parametrosmedida10_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosmedida10" id="form_parametrosmedida10" onsubmit="
				document.getElementById('parametrosmedida10_edit').style.display='none';
				document.getElementById('parametrosmedida10_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=10&field=medida&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosmedida10').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosmedida10" name="text_parametrosmedida10" type="text" class="editingSize editMode" size="4" value="bbls"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosmedida10_show').style.display = '';
				document.getElementById('parametrosmedida10_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosmedida10_save" class="savingAjaxWithBackground">Saving...</span></td><td>
<input type="button" class="editingSize" onClick="confirmDelete('10', 'parametros', 'id');" value="Eliminar" />
</td>
</tr><tr class='odd' id="parametros_row_11" valign='top'>
<td>11</td><td><span class="editable hand_cursor" id="parametrosslot11_show" onClick="
			document.getElementById('parametrosslot11_edit').style.display = '';
			document.getElementById('parametrosslot11_show').style.display = 'none';
			document.getElementById('text_parametrosslot11').focus();
            ">0143</span>
        <span id="parametrosslot11_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosslot11" id="form_parametrosslot11" onsubmit="
				document.getElementById('parametrosslot11_edit').style.display='none';
				document.getElementById('parametrosslot11_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=11&field=slot&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosslot11').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosslot11" name="text_parametrosslot11" type="text" class="editingSize editMode" size="4" value="0143"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosslot11_show').style.display = '';
				document.getElementById('parametrosslot11_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosslot11_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosparametro11_show" onClick="
			document.getElementById('parametrosparametro11_edit').style.display = '';
			document.getElementById('parametrosparametro11_show').style.display = 'none';
			document.getElementById('text_parametrosparametro11').focus();
            ">Intermedio</span>
        <span id="parametrosparametro11_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosparametro11" id="form_parametrosparametro11" onsubmit="
				document.getElementById('parametrosparametro11_edit').style.display='none';
				document.getElementById('parametrosparametro11_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=11&field=parametro&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosparametro11').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosparametro11" name="text_parametrosparametro11" type="text" class="editingSize editMode" size="10" value="Intermedio"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosparametro11_show').style.display = '';
				document.getElementById('parametrosparametro11_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosparametro11_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosmedida11_show" onClick="
			document.getElementById('parametrosmedida11_edit').style.display = '';
			document.getElementById('parametrosmedida11_show').style.display = 'none';
			document.getElementById('text_parametrosmedida11').focus();
            ">bbls</span>
        <span id="parametrosmedida11_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosmedida11" id="form_parametrosmedida11" onsubmit="
				document.getElementById('parametrosmedida11_edit').style.display='none';
				document.getElementById('parametrosmedida11_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=11&field=medida&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosmedida11').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosmedida11" name="text_parametrosmedida11" type="text" class="editingSize editMode" size="4" value="bbls"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosmedida11_show').style.display = '';
				document.getElementById('parametrosmedida11_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosmedida11_save" class="savingAjaxWithBackground">Saving...</span></td><td>
<input type="button" class="editingSize" onClick="confirmDelete('11', 'parametros', 'id');" value="Eliminar" />
</td>
</tr><tr class='cell_row' id="parametros_row_12" valign='top'>
<td>12</td><td><span class="editable hand_cursor" id="parametrosslot12_show" onClick="
			document.getElementById('parametrosslot12_edit').style.display = '';
			document.getElementById('parametrosslot12_show').style.display = 'none';
			document.getElementById('text_parametrosslot12').focus();
            ">0144</span>
        <span id="parametrosslot12_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosslot12" id="form_parametrosslot12" onsubmit="
				document.getElementById('parametrosslot12_edit').style.display='none';
				document.getElementById('parametrosslot12_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=12&field=slot&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosslot12').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosslot12" name="text_parametrosslot12" type="text" class="editingSize editMode" size="4" value="0144"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosslot12_show').style.display = '';
				document.getElementById('parametrosslot12_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosslot12_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosparametro12_show" onClick="
			document.getElementById('parametrosparametro12_edit').style.display = '';
			document.getElementById('parametrosparametro12_show').style.display = 'none';
			document.getElementById('text_parametrosparametro12').focus();
            ">Succion</span>
        <span id="parametrosparametro12_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosparametro12" id="form_parametrosparametro12" onsubmit="
				document.getElementById('parametrosparametro12_edit').style.display='none';
				document.getElementById('parametrosparametro12_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=12&field=parametro&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosparametro12').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosparametro12" name="text_parametrosparametro12" type="text" class="editingSize editMode" size="7" value="Succion"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosparametro12_show').style.display = '';
				document.getElementById('parametrosparametro12_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosparametro12_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosmedida12_show" onClick="
			document.getElementById('parametrosmedida12_edit').style.display = '';
			document.getElementById('parametrosmedida12_show').style.display = 'none';
			document.getElementById('text_parametrosmedida12').focus();
            ">bbls</span>
        <span id="parametrosmedida12_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosmedida12" id="form_parametrosmedida12" onsubmit="
				document.getElementById('parametrosmedida12_edit').style.display='none';
				document.getElementById('parametrosmedida12_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=12&field=medida&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosmedida12').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosmedida12" name="text_parametrosmedida12" type="text" class="editingSize editMode" size="4" value="bbls"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosmedida12_show').style.display = '';
				document.getElementById('parametrosmedida12_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosmedida12_save" class="savingAjaxWithBackground">Saving...</span></td><td>
<input type="button" class="editingSize" onClick="confirmDelete('12', 'parametros', 'id');" value="Eliminar" />
</td>
</tr><tr class='odd' id="parametros_row_13" valign='top'>
<td>13</td><td><span class="editable hand_cursor" id="parametrosslot13_show" onClick="
			document.getElementById('parametrosslot13_edit').style.display = '';
			document.getElementById('parametrosslot13_show').style.display = 'none';
			document.getElementById('text_parametrosslot13').focus();
            ">0131</span>
        <span id="parametrosslot13_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosslot13" id="form_parametrosslot13" onsubmit="
				document.getElementById('parametrosslot13_edit').style.display='none';
				document.getElementById('parametrosslot13_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=13&field=slot&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosslot13').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosslot13" name="text_parametrosslot13" type="text" class="editingSize editMode" size="4" value="0131"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosslot13_show').style.display = '';
				document.getElementById('parametrosslot13_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosslot13_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosparametro13_show" onClick="
			document.getElementById('parametrosparametro13_edit').style.display = '';
			document.getElementById('parametrosparametro13_show').style.display = 'none';
			document.getElementById('text_parametrosparametro13').focus();
            ">Densidad Saliendo</span>
        <span id="parametrosparametro13_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosparametro13" id="form_parametrosparametro13" onsubmit="
				document.getElementById('parametrosparametro13_edit').style.display='none';
				document.getElementById('parametrosparametro13_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=13&field=parametro&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosparametro13').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosparametro13" name="text_parametrosparametro13" type="text" class="editingSize editMode" size="17" value="Densidad Saliendo"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosparametro13_show').style.display = '';
				document.getElementById('parametrosparametro13_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosparametro13_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosmedida13_show" onClick="
			document.getElementById('parametrosmedida13_edit').style.display = '';
			document.getElementById('parametrosmedida13_show').style.display = 'none';
			document.getElementById('text_parametrosmedida13').focus();
            ">Lb/Gal</span>
        <span id="parametrosmedida13_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosmedida13" id="form_parametrosmedida13" onsubmit="
				document.getElementById('parametrosmedida13_edit').style.display='none';
				document.getElementById('parametrosmedida13_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=13&field=medida&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosmedida13').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosmedida13" name="text_parametrosmedida13" type="text" class="editingSize editMode" size="6" value="Lb/Gal"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosmedida13_show').style.display = '';
				document.getElementById('parametrosmedida13_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosmedida13_save" class="savingAjaxWithBackground">Saving...</span></td><td>
<input type="button" class="editingSize" onClick="confirmDelete('13', 'parametros', 'id');" value="Eliminar" />
</td>
</tr><tr class='cell_row' id="parametros_row_14" valign='top'>
<td>14</td><td><span class="editable hand_cursor" id="parametrosslot14_show" onClick="
			document.getElementById('parametrosslot14_edit').style.display = '';
			document.getElementById('parametrosslot14_show').style.display = 'none';
			document.getElementById('text_parametrosslot14').focus();
            ">0130</span>
        <span id="parametrosslot14_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosslot14" id="form_parametrosslot14" onsubmit="
				document.getElementById('parametrosslot14_edit').style.display='none';
				document.getElementById('parametrosslot14_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=14&field=slot&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosslot14').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosslot14" name="text_parametrosslot14" type="text" class="editingSize editMode" size="4" value="0130"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosslot14_show').style.display = '';
				document.getElementById('parametrosslot14_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosslot14_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosparametro14_show" onClick="
			document.getElementById('parametrosparametro14_edit').style.display = '';
			document.getElementById('parametrosparametro14_show').style.display = 'none';
			document.getElementById('text_parametrosparametro14').focus();
            ">Densidad Entrando</span>
        <span id="parametrosparametro14_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosparametro14" id="form_parametrosparametro14" onsubmit="
				document.getElementById('parametrosparametro14_edit').style.display='none';
				document.getElementById('parametrosparametro14_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=14&field=parametro&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosparametro14').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosparametro14" name="text_parametrosparametro14" type="text" class="editingSize editMode" size="17" value="Densidad Entrando"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosparametro14_show').style.display = '';
				document.getElementById('parametrosparametro14_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosparametro14_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosmedida14_show" onClick="
			document.getElementById('parametrosmedida14_edit').style.display = '';
			document.getElementById('parametrosmedida14_show').style.display = 'none';
			document.getElementById('text_parametrosmedida14').focus();
            ">Lb/Gal</span>
        <span id="parametrosmedida14_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosmedida14" id="form_parametrosmedida14" onsubmit="
				document.getElementById('parametrosmedida14_edit').style.display='none';
				document.getElementById('parametrosmedida14_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=14&field=medida&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosmedida14').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosmedida14" name="text_parametrosmedida14" type="text" class="editingSize editMode" size="6" value="Lb/Gal"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosmedida14_show').style.display = '';
				document.getElementById('parametrosmedida14_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosmedida14_save" class="savingAjaxWithBackground">Saving...</span></td><td>
<input type="button" class="editingSize" onClick="confirmDelete('14', 'parametros', 'id');" value="Eliminar" />
</td>
</tr><tr class='odd' id="parametros_row_15" valign='top'>
<td>15</td><td><span class="editable hand_cursor" id="parametrosslot15_show" onClick="
			document.getElementById('parametrosslot15_edit').style.display = '';
			document.getElementById('parametrosslot15_show').style.display = 'none';
			document.getElementById('text_parametrosslot15').focus();
            ">0121</span>
        <span id="parametrosslot15_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosslot15" id="form_parametrosslot15" onsubmit="
				document.getElementById('parametrosslot15_edit').style.display='none';
				document.getElementById('parametrosslot15_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=15&field=slot&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosslot15').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosslot15" name="text_parametrosslot15" type="text" class="editingSize editMode" size="4" value="0121"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosslot15_show').style.display = '';
				document.getElementById('parametrosslot15_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosslot15_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosparametro15_show" onClick="
			document.getElementById('parametrosparametro15_edit').style.display = '';
			document.getElementById('parametrosparametro15_show').style.display = 'none';
			document.getElementById('text_parametrosparametro15').focus();
            ">Presion de Bomba</span>
        <span id="parametrosparametro15_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosparametro15" id="form_parametrosparametro15" onsubmit="
				document.getElementById('parametrosparametro15_edit').style.display='none';
				document.getElementById('parametrosparametro15_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=15&field=parametro&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosparametro15').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosparametro15" name="text_parametrosparametro15" type="text" class="editingSize editMode" size="16" value="Presion de Bomba"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosparametro15_show').style.display = '';
				document.getElementById('parametrosparametro15_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosparametro15_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosmedida15_show" onClick="
			document.getElementById('parametrosmedida15_edit').style.display = '';
			document.getElementById('parametrosmedida15_show').style.display = 'none';
			document.getElementById('text_parametrosmedida15').focus();
            ">--</span>
        <span id="parametrosmedida15_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosmedida15" id="form_parametrosmedida15" onsubmit="
				document.getElementById('parametrosmedida15_edit').style.display='none';
				document.getElementById('parametrosmedida15_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=15&field=medida&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosmedida15').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosmedida15" name="text_parametrosmedida15" type="text" class="editingSize editMode" size="15" value=""/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosmedida15_show').style.display = '';
				document.getElementById('parametrosmedida15_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosmedida15_save" class="savingAjaxWithBackground">Saving...</span></td><td>
<input type="button" class="editingSize" onClick="confirmDelete('15', 'parametros', 'id');" value="Eliminar" />
</td>
</tr><tr class='cell_row' id="parametros_row_16" valign='top'>
<td>16</td><td><span class="editable hand_cursor" id="parametrosslot16_show" onClick="
			document.getElementById('parametrosslot16_edit').style.display = '';
			document.getElementById('parametrosslot16_show').style.display = 'none';
			document.getElementById('text_parametrosslot16').focus();
            ">1110</span>
        <span id="parametrosslot16_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosslot16" id="form_parametrosslot16" onsubmit="
				document.getElementById('parametrosslot16_edit').style.display='none';
				document.getElementById('parametrosslot16_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=16&field=slot&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosslot16').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosslot16" name="text_parametrosslot16" type="text" class="editingSize editMode" size="4" value="1110"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosslot16_show').style.display = '';
				document.getElementById('parametrosslot16_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosslot16_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosparametro16_show" onClick="
			document.getElementById('parametrosparametro16_edit').style.display = '';
			document.getElementById('parametrosparametro16_show').style.display = 'none';
			document.getElementById('text_parametrosparametro16').focus();
            ">Volumen Total</span>
        <span id="parametrosparametro16_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosparametro16" id="form_parametrosparametro16" onsubmit="
				document.getElementById('parametrosparametro16_edit').style.display='none';
				document.getElementById('parametrosparametro16_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=16&field=parametro&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosparametro16').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosparametro16" name="text_parametrosparametro16" type="text" class="editingSize editMode" size="13" value="Volumen Total"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosparametro16_show').style.display = '';
				document.getElementById('parametrosparametro16_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosparametro16_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosmedida16_show" onClick="
			document.getElementById('parametrosmedida16_edit').style.display = '';
			document.getElementById('parametrosmedida16_show').style.display = 'none';
			document.getElementById('text_parametrosmedida16').focus();
            ">bbls</span>
        <span id="parametrosmedida16_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosmedida16" id="form_parametrosmedida16" onsubmit="
				document.getElementById('parametrosmedida16_edit').style.display='none';
				document.getElementById('parametrosmedida16_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=16&field=medida&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosmedida16').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosmedida16" name="text_parametrosmedida16" type="text" class="editingSize editMode" size="4" value="bbls"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosmedida16_show').style.display = '';
				document.getElementById('parametrosmedida16_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosmedida16_save" class="savingAjaxWithBackground">Saving...</span></td><td>
<input type="button" class="editingSize" onClick="confirmDelete('16', 'parametros', 'id');" value="Eliminar" />
</td>
</tr><tr class='odd' id="parametros_row_17" valign='top'>
<td>17</td><td><span class="editable hand_cursor" id="parametrosslot17_show" onClick="
			document.getElementById('parametrosslot17_edit').style.display = '';
			document.getElementById('parametrosslot17_show').style.display = 'none';
			document.getElementById('text_parametrosslot17').focus();
            ">0113</span>
        <span id="parametrosslot17_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosslot17" id="form_parametrosslot17" onsubmit="
				document.getElementById('parametrosslot17_edit').style.display='none';
				document.getElementById('parametrosslot17_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=17&field=slot&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosslot17').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosslot17" name="text_parametrosslot17" type="text" class="editingSize editMode" size="4" value="0113"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosslot17_show').style.display = '';
				document.getElementById('parametrosslot17_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosslot17_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosparametro17_show" onClick="
			document.getElementById('parametrosparametro17_edit').style.display = '';
			document.getElementById('parametrosparametro17_show').style.display = 'none';
			document.getElementById('text_parametrosparametro17').focus();
            ">Rate of Penetration</span>
        <span id="parametrosparametro17_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosparametro17" id="form_parametrosparametro17" onsubmit="
				document.getElementById('parametrosparametro17_edit').style.display='none';
				document.getElementById('parametrosparametro17_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=17&field=parametro&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosparametro17').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosparametro17" name="text_parametrosparametro17" type="text" class="editingSize editMode" size="19" value="Rate of Penetration"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosparametro17_show').style.display = '';
				document.getElementById('parametrosparametro17_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosparametro17_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosmedida17_show" onClick="
			document.getElementById('parametrosmedida17_edit').style.display = '';
			document.getElementById('parametrosmedida17_show').style.display = 'none';
			document.getElementById('text_parametrosmedida17').focus();
            ">ft/hr</span>
        <span id="parametrosmedida17_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosmedida17" id="form_parametrosmedida17" onsubmit="
				document.getElementById('parametrosmedida17_edit').style.display='none';
				document.getElementById('parametrosmedida17_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=17&field=medida&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosmedida17').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosmedida17" name="text_parametrosmedida17" type="text" class="editingSize editMode" size="5" value="ft/hr"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosmedida17_show').style.display = '';
				document.getElementById('parametrosmedida17_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosmedida17_save" class="savingAjaxWithBackground">Saving...</span></td><td>
<input type="button" class="editingSize" onClick="confirmDelete('17', 'parametros', 'id');" value="Eliminar" />
</td>
</tr><tr class='cell_row' id="parametros_row_18" valign='top'>
<td>18</td><td><span class="editable hand_cursor" id="parametrosslot18_show" onClick="
			document.getElementById('parametrosslot18_edit').style.display = '';
			document.getElementById('parametrosslot18_show').style.display = 'none';
			document.getElementById('text_parametrosslot18').focus();
            ">0123</span>
        <span id="parametrosslot18_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosslot18" id="form_parametrosslot18" onsubmit="
				document.getElementById('parametrosslot18_edit').style.display='none';
				document.getElementById('parametrosslot18_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=18&field=slot&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosslot18').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosslot18" name="text_parametrosslot18" type="text" class="editingSize editMode" size="4" value="0123"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosslot18_show').style.display = '';
				document.getElementById('parametrosslot18_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosslot18_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosparametro18_show" onClick="
			document.getElementById('parametrosparametro18_edit').style.display = '';
			document.getElementById('parametrosparametro18_show').style.display = 'none';
			document.getElementById('text_parametrosparametro18').focus();
            ">Emboladas x minuto 1</span>
        <span id="parametrosparametro18_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosparametro18" id="form_parametrosparametro18" onsubmit="
				document.getElementById('parametrosparametro18_edit').style.display='none';
				document.getElementById('parametrosparametro18_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=18&field=parametro&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosparametro18').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosparametro18" name="text_parametrosparametro18" type="text" class="editingSize editMode" size="20" value="Emboladas x minuto 1"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosparametro18_show').style.display = '';
				document.getElementById('parametrosparametro18_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosparametro18_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosmedida18_show" onClick="
			document.getElementById('parametrosmedida18_edit').style.display = '';
			document.getElementById('parametrosmedida18_show').style.display = 'none';
			document.getElementById('text_parametrosmedida18').focus();
            ">--</span>
        <span id="parametrosmedida18_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosmedida18" id="form_parametrosmedida18" onsubmit="
				document.getElementById('parametrosmedida18_edit').style.display='none';
				document.getElementById('parametrosmedida18_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=18&field=medida&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosmedida18').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosmedida18" name="text_parametrosmedida18" type="text" class="editingSize editMode" size="15" value=""/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosmedida18_show').style.display = '';
				document.getElementById('parametrosmedida18_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosmedida18_save" class="savingAjaxWithBackground">Saving...</span></td><td>
<input type="button" class="editingSize" onClick="confirmDelete('18', 'parametros', 'id');" value="Eliminar" />
</td>
</tr><tr class='odd' id="parametros_row_19" valign='top'>
<td>19</td><td><span class="editable hand_cursor" id="parametrosslot19_show" onClick="
			document.getElementById('parametrosslot19_edit').style.display = '';
			document.getElementById('parametrosslot19_show').style.display = 'none';
			document.getElementById('text_parametrosslot19').focus();
            ">0124</span>
        <span id="parametrosslot19_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosslot19" id="form_parametrosslot19" onsubmit="
				document.getElementById('parametrosslot19_edit').style.display='none';
				document.getElementById('parametrosslot19_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=19&field=slot&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosslot19').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosslot19" name="text_parametrosslot19" type="text" class="editingSize editMode" size="4" value="0124"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosslot19_show').style.display = '';
				document.getElementById('parametrosslot19_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosslot19_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosparametro19_show" onClick="
			document.getElementById('parametrosparametro19_edit').style.display = '';
			document.getElementById('parametrosparametro19_show').style.display = 'none';
			document.getElementById('text_parametrosparametro19').focus();
            ">Emboladas x minuto 2</span>
        <span id="parametrosparametro19_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosparametro19" id="form_parametrosparametro19" onsubmit="
				document.getElementById('parametrosparametro19_edit').style.display='none';
				document.getElementById('parametrosparametro19_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=19&field=parametro&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosparametro19').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosparametro19" name="text_parametrosparametro19" type="text" class="editingSize editMode" size="20" value="Emboladas x minuto 2"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosparametro19_show').style.display = '';
				document.getElementById('parametrosparametro19_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosparametro19_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosmedida19_show" onClick="
			document.getElementById('parametrosmedida19_edit').style.display = '';
			document.getElementById('parametrosmedida19_show').style.display = 'none';
			document.getElementById('text_parametrosmedida19').focus();
            ">--</span>
        <span id="parametrosmedida19_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosmedida19" id="form_parametrosmedida19" onsubmit="
				document.getElementById('parametrosmedida19_edit').style.display='none';
				document.getElementById('parametrosmedida19_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=19&field=medida&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosmedida19').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosmedida19" name="text_parametrosmedida19" type="text" class="editingSize editMode" size="15" value=""/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosmedida19_show').style.display = '';
				document.getElementById('parametrosmedida19_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosmedida19_save" class="savingAjaxWithBackground">Saving...</span></td><td>
<input type="button" class="editingSize" onClick="confirmDelete('19', 'parametros', 'id');" value="Eliminar" />
</td>
</tr><tr class='cell_row' id="parametros_row_20" valign='top'>
<td>20</td><td><span class="editable hand_cursor" id="parametrosslot20_show" onClick="
			document.getElementById('parametrosslot20_edit').style.display = '';
			document.getElementById('parametrosslot20_show').style.display = 'none';
			document.getElementById('text_parametrosslot20').focus();
            ">0125</span>
        <span id="parametrosslot20_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosslot20" id="form_parametrosslot20" onsubmit="
				document.getElementById('parametrosslot20_edit').style.display='none';
				document.getElementById('parametrosslot20_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=20&field=slot&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosslot20').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosslot20" name="text_parametrosslot20" type="text" class="editingSize editMode" size="4" value="0125"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosslot20_show').style.display = '';
				document.getElementById('parametrosslot20_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosslot20_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosparametro20_show" onClick="
			document.getElementById('parametrosparametro20_edit').style.display = '';
			document.getElementById('parametrosparametro20_show').style.display = 'none';
			document.getElementById('text_parametrosparametro20').focus();
            ">Emboladas x minuto 3</span>
        <span id="parametrosparametro20_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosparametro20" id="form_parametrosparametro20" onsubmit="
				document.getElementById('parametrosparametro20_edit').style.display='none';
				document.getElementById('parametrosparametro20_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=20&field=parametro&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosparametro20').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosparametro20" name="text_parametrosparametro20" type="text" class="editingSize editMode" size="20" value="Emboladas x minuto 3"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosparametro20_show').style.display = '';
				document.getElementById('parametrosparametro20_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosparametro20_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosmedida20_show" onClick="
			document.getElementById('parametrosmedida20_edit').style.display = '';
			document.getElementById('parametrosmedida20_show').style.display = 'none';
			document.getElementById('text_parametrosmedida20').focus();
            ">--</span>
        <span id="parametrosmedida20_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosmedida20" id="form_parametrosmedida20" onsubmit="
				document.getElementById('parametrosmedida20_edit').style.display='none';
				document.getElementById('parametrosmedida20_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=20&field=medida&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosmedida20').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosmedida20" name="text_parametrosmedida20" type="text" class="editingSize editMode" size="15" value=""/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosmedida20_show').style.display = '';
				document.getElementById('parametrosmedida20_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosmedida20_save" class="savingAjaxWithBackground">Saving...</span></td><td>
<input type="button" class="editingSize" onClick="confirmDelete('20', 'parametros', 'id');" value="Eliminar" />
</td>
</tr><tr class='odd' id="parametros_row_21" valign='top'>
<td>21</td><td><span class="editable hand_cursor" id="parametrosslot21_show" onClick="
			document.getElementById('parametrosslot21_edit').style.display = '';
			document.getElementById('parametrosslot21_show').style.display = 'none';
			document.getElementById('text_parametrosslot21').focus();
            ">0137</span>
        <span id="parametrosslot21_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosslot21" id="form_parametrosslot21" onsubmit="
				document.getElementById('parametrosslot21_edit').style.display='none';
				document.getElementById('parametrosslot21_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=21&field=slot&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosslot21').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosslot21" name="text_parametrosslot21" type="text" class="editingSize editMode" size="4" value="0137"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosslot21_show').style.display = '';
				document.getElementById('parametrosslot21_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosslot21_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosparametro21_show" onClick="
			document.getElementById('parametrosparametro21_edit').style.display = '';
			document.getElementById('parametrosparametro21_show').style.display = 'none';
			document.getElementById('text_parametrosparametro21').focus();
            ">Strokes Total</span>
        <span id="parametrosparametro21_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosparametro21" id="form_parametrosparametro21" onsubmit="
				document.getElementById('parametrosparametro21_edit').style.display='none';
				document.getElementById('parametrosparametro21_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=21&field=parametro&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosparametro21').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosparametro21" name="text_parametrosparametro21" type="text" class="editingSize editMode" size="13" value="Strokes Total"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosparametro21_show').style.display = '';
				document.getElementById('parametrosparametro21_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosparametro21_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosmedida21_show" onClick="
			document.getElementById('parametrosmedida21_edit').style.display = '';
			document.getElementById('parametrosmedida21_show').style.display = 'none';
			document.getElementById('text_parametrosmedida21').focus();
            ">strokes</span>
        <span id="parametrosmedida21_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosmedida21" id="form_parametrosmedida21" onsubmit="
				document.getElementById('parametrosmedida21_edit').style.display='none';
				document.getElementById('parametrosmedida21_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=21&field=medida&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosmedida21').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosmedida21" name="text_parametrosmedida21" type="text" class="editingSize editMode" size="7" value="strokes"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosmedida21_show').style.display = '';
				document.getElementById('parametrosmedida21_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosmedida21_save" class="savingAjaxWithBackground">Saving...</span></td><td>
<input type="button" class="editingSize" onClick="confirmDelete('21', 'parametros', 'id');" value="Eliminar" />
</td>
</tr><tr class='cell_row' id="parametros_row_22" valign='top'>
<td>22</td><td><span class="editable hand_cursor" id="parametrosslot22_show" onClick="
			document.getElementById('parametrosslot22_edit').style.display = '';
			document.getElementById('parametrosslot22_show').style.display = 'none';
			document.getElementById('text_parametrosslot22').focus();
            ">0134</span>
        <span id="parametrosslot22_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosslot22" id="form_parametrosslot22" onsubmit="
				document.getElementById('parametrosslot22_edit').style.display='none';
				document.getElementById('parametrosslot22_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=22&field=slot&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosslot22').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosslot22" name="text_parametrosslot22" type="text" class="editingSize editMode" size="4" value="0134"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosslot22_show').style.display = '';
				document.getElementById('parametrosslot22_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosslot22_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosparametro22_show" onClick="
			document.getElementById('parametrosparametro22_edit').style.display = '';
			document.getElementById('parametrosparametro22_show').style.display = 'none';
			document.getElementById('text_parametrosparametro22').focus();
            ">Temperatura In</span>
        <span id="parametrosparametro22_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosparametro22" id="form_parametrosparametro22" onsubmit="
				document.getElementById('parametrosparametro22_edit').style.display='none';
				document.getElementById('parametrosparametro22_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=22&field=parametro&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosparametro22').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosparametro22" name="text_parametrosparametro22" type="text" class="editingSize editMode" size="14" value="Temperatura In"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosparametro22_show').style.display = '';
				document.getElementById('parametrosparametro22_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosparametro22_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosmedida22_show" onClick="
			document.getElementById('parametrosmedida22_edit').style.display = '';
			document.getElementById('parametrosmedida22_show').style.display = 'none';
			document.getElementById('text_parametrosmedida22').focus();
            ">deg f</span>
        <span id="parametrosmedida22_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosmedida22" id="form_parametrosmedida22" onsubmit="
				document.getElementById('parametrosmedida22_edit').style.display='none';
				document.getElementById('parametrosmedida22_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=22&field=medida&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosmedida22').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosmedida22" name="text_parametrosmedida22" type="text" class="editingSize editMode" size="5" value="deg f"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosmedida22_show').style.display = '';
				document.getElementById('parametrosmedida22_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosmedida22_save" class="savingAjaxWithBackground">Saving...</span></td><td>
<input type="button" class="editingSize" onClick="confirmDelete('22', 'parametros', 'id');" value="Eliminar" />
</td>
</tr><tr class='odd' id="parametros_row_23" valign='top'>
<td>23</td><td><span class="editable hand_cursor" id="parametrosslot23_show" onClick="
			document.getElementById('parametrosslot23_edit').style.display = '';
			document.getElementById('parametrosslot23_show').style.display = 'none';
			document.getElementById('text_parametrosslot23').focus();
            ">0133</span>
        <span id="parametrosslot23_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosslot23" id="form_parametrosslot23" onsubmit="
				document.getElementById('parametrosslot23_edit').style.display='none';
				document.getElementById('parametrosslot23_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=23&field=slot&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosslot23').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosslot23" name="text_parametrosslot23" type="text" class="editingSize editMode" size="4" value="0133"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosslot23_show').style.display = '';
				document.getElementById('parametrosslot23_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosslot23_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosparametro23_show" onClick="
			document.getElementById('parametrosparametro23_edit').style.display = '';
			document.getElementById('parametrosparametro23_show').style.display = 'none';
			document.getElementById('text_parametrosparametro23').focus();
            ">Temperatura Out</span>
        <span id="parametrosparametro23_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosparametro23" id="form_parametrosparametro23" onsubmit="
				document.getElementById('parametrosparametro23_edit').style.display='none';
				document.getElementById('parametrosparametro23_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=23&field=parametro&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosparametro23').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosparametro23" name="text_parametrosparametro23" type="text" class="editingSize editMode" size="15" value="Temperatura Out"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosparametro23_show').style.display = '';
				document.getElementById('parametrosparametro23_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosparametro23_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosmedida23_show" onClick="
			document.getElementById('parametrosmedida23_edit').style.display = '';
			document.getElementById('parametrosmedida23_show').style.display = 'none';
			document.getElementById('text_parametrosmedida23').focus();
            ">deg f</span>
        <span id="parametrosmedida23_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosmedida23" id="form_parametrosmedida23" onsubmit="
				document.getElementById('parametrosmedida23_edit').style.display='none';
				document.getElementById('parametrosmedida23_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=23&field=medida&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosmedida23').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosmedida23" name="text_parametrosmedida23" type="text" class="editingSize editMode" size="5" value="deg f"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosmedida23_show').style.display = '';
				document.getElementById('parametrosmedida23_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosmedida23_save" class="savingAjaxWithBackground">Saving...</span></td><td>
<input type="button" class="editingSize" onClick="confirmDelete('23', 'parametros', 'id');" value="Eliminar" />
</td>
</tr><tr class='cell_row' id="parametros_row_24" valign='top'>
<td>24</td><td><span class="editable hand_cursor" id="parametrosslot24_show" onClick="
			document.getElementById('parametrosslot24_edit').style.display = '';
			document.getElementById('parametrosslot24_show').style.display = 'none';
			document.getElementById('text_parametrosslot24').focus();
            ">1212</span>
        <span id="parametrosslot24_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosslot24" id="form_parametrosslot24" onsubmit="
				document.getElementById('parametrosslot24_edit').style.display='none';
				document.getElementById('parametrosslot24_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=24&field=slot&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosslot24').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosslot24" name="text_parametrosslot24" type="text" class="editingSize editMode" size="4" value="1212"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosslot24_show').style.display = '';
				document.getElementById('parametrosslot24_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosslot24_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosparametro24_show" onClick="
			document.getElementById('parametrosparametro24_edit').style.display = '';
			document.getElementById('parametrosparametro24_show').style.display = 'none';
			document.getElementById('text_parametrosparametro24').focus();
            ">C1</span>
        <span id="parametrosparametro24_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosparametro24" id="form_parametrosparametro24" onsubmit="
				document.getElementById('parametrosparametro24_edit').style.display='none';
				document.getElementById('parametrosparametro24_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=24&field=parametro&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosparametro24').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosparametro24" name="text_parametrosparametro24" type="text" class="editingSize editMode" size="2" value="C1"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosparametro24_show').style.display = '';
				document.getElementById('parametrosparametro24_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosparametro24_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosmedida24_show" onClick="
			document.getElementById('parametrosmedida24_edit').style.display = '';
			document.getElementById('parametrosmedida24_show').style.display = 'none';
			document.getElementById('text_parametrosmedida24').focus();
            ">ppm</span>
        <span id="parametrosmedida24_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosmedida24" id="form_parametrosmedida24" onsubmit="
				document.getElementById('parametrosmedida24_edit').style.display='none';
				document.getElementById('parametrosmedida24_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=24&field=medida&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosmedida24').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosmedida24" name="text_parametrosmedida24" type="text" class="editingSize editMode" size="3" value="ppm"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosmedida24_show').style.display = '';
				document.getElementById('parametrosmedida24_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosmedida24_save" class="savingAjaxWithBackground">Saving...</span></td><td>
<input type="button" class="editingSize" onClick="confirmDelete('24', 'parametros', 'id');" value="Eliminar" />
</td>
</tr><tr class='odd' id="parametros_row_25" valign='top'>
<td>25</td><td><span class="editable hand_cursor" id="parametrosslot25_show" onClick="
			document.getElementById('parametrosslot25_edit').style.display = '';
			document.getElementById('parametrosslot25_show').style.display = 'none';
			document.getElementById('text_parametrosslot25').focus();
            ">1213</span>
        <span id="parametrosslot25_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosslot25" id="form_parametrosslot25" onsubmit="
				document.getElementById('parametrosslot25_edit').style.display='none';
				document.getElementById('parametrosslot25_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=25&field=slot&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosslot25').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosslot25" name="text_parametrosslot25" type="text" class="editingSize editMode" size="4" value="1213"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosslot25_show').style.display = '';
				document.getElementById('parametrosslot25_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosslot25_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosparametro25_show" onClick="
			document.getElementById('parametrosparametro25_edit').style.display = '';
			document.getElementById('parametrosparametro25_show').style.display = 'none';
			document.getElementById('text_parametrosparametro25').focus();
            ">C2</span>
        <span id="parametrosparametro25_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosparametro25" id="form_parametrosparametro25" onsubmit="
				document.getElementById('parametrosparametro25_edit').style.display='none';
				document.getElementById('parametrosparametro25_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=25&field=parametro&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosparametro25').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosparametro25" name="text_parametrosparametro25" type="text" class="editingSize editMode" size="2" value="C2"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosparametro25_show').style.display = '';
				document.getElementById('parametrosparametro25_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosparametro25_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosmedida25_show" onClick="
			document.getElementById('parametrosmedida25_edit').style.display = '';
			document.getElementById('parametrosmedida25_show').style.display = 'none';
			document.getElementById('text_parametrosmedida25').focus();
            ">ppm</span>
        <span id="parametrosmedida25_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosmedida25" id="form_parametrosmedida25" onsubmit="
				document.getElementById('parametrosmedida25_edit').style.display='none';
				document.getElementById('parametrosmedida25_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=25&field=medida&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosmedida25').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosmedida25" name="text_parametrosmedida25" type="text" class="editingSize editMode" size="3" value="ppm"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosmedida25_show').style.display = '';
				document.getElementById('parametrosmedida25_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosmedida25_save" class="savingAjaxWithBackground">Saving...</span></td><td>
<input type="button" class="editingSize" onClick="confirmDelete('25', 'parametros', 'id');" value="Eliminar" />
</td>
</tr><tr class='cell_row' id="parametros_row_26" valign='top'>
<td>26</td><td><span class="editable hand_cursor" id="parametrosslot26_show" onClick="
			document.getElementById('parametrosslot26_edit').style.display = '';
			document.getElementById('parametrosslot26_show').style.display = 'none';
			document.getElementById('text_parametrosslot26').focus();
            ">1214</span>
        <span id="parametrosslot26_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosslot26" id="form_parametrosslot26" onsubmit="
				document.getElementById('parametrosslot26_edit').style.display='none';
				document.getElementById('parametrosslot26_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=26&field=slot&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosslot26').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosslot26" name="text_parametrosslot26" type="text" class="editingSize editMode" size="4" value="1214"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosslot26_show').style.display = '';
				document.getElementById('parametrosslot26_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosslot26_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosparametro26_show" onClick="
			document.getElementById('parametrosparametro26_edit').style.display = '';
			document.getElementById('parametrosparametro26_show').style.display = 'none';
			document.getElementById('text_parametrosparametro26').focus();
            ">C3</span>
        <span id="parametrosparametro26_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosparametro26" id="form_parametrosparametro26" onsubmit="
				document.getElementById('parametrosparametro26_edit').style.display='none';
				document.getElementById('parametrosparametro26_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=26&field=parametro&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosparametro26').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosparametro26" name="text_parametrosparametro26" type="text" class="editingSize editMode" size="2" value="C3"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosparametro26_show').style.display = '';
				document.getElementById('parametrosparametro26_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosparametro26_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosmedida26_show" onClick="
			document.getElementById('parametrosmedida26_edit').style.display = '';
			document.getElementById('parametrosmedida26_show').style.display = 'none';
			document.getElementById('text_parametrosmedida26').focus();
            ">ppm</span>
        <span id="parametrosmedida26_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosmedida26" id="form_parametrosmedida26" onsubmit="
				document.getElementById('parametrosmedida26_edit').style.display='none';
				document.getElementById('parametrosmedida26_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=26&field=medida&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosmedida26').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosmedida26" name="text_parametrosmedida26" type="text" class="editingSize editMode" size="3" value="ppm"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosmedida26_show').style.display = '';
				document.getElementById('parametrosmedida26_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosmedida26_save" class="savingAjaxWithBackground">Saving...</span></td><td>
<input type="button" class="editingSize" onClick="confirmDelete('26', 'parametros', 'id');" value="Eliminar" />
</td>
</tr><tr class='odd' id="parametros_row_27" valign='top'>
<td>27</td><td><span class="editable hand_cursor" id="parametrosslot27_show" onClick="
			document.getElementById('parametrosslot27_edit').style.display = '';
			document.getElementById('parametrosslot27_show').style.display = 'none';
			document.getElementById('text_parametrosslot27').focus();
            ">1215</span>
        <span id="parametrosslot27_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosslot27" id="form_parametrosslot27" onsubmit="
				document.getElementById('parametrosslot27_edit').style.display='none';
				document.getElementById('parametrosslot27_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=27&field=slot&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosslot27').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosslot27" name="text_parametrosslot27" type="text" class="editingSize editMode" size="4" value="1215"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosslot27_show').style.display = '';
				document.getElementById('parametrosslot27_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosslot27_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosparametro27_show" onClick="
			document.getElementById('parametrosparametro27_edit').style.display = '';
			document.getElementById('parametrosparametro27_show').style.display = 'none';
			document.getElementById('text_parametrosparametro27').focus();
            ">IC4</span>
        <span id="parametrosparametro27_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosparametro27" id="form_parametrosparametro27" onsubmit="
				document.getElementById('parametrosparametro27_edit').style.display='none';
				document.getElementById('parametrosparametro27_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=27&field=parametro&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosparametro27').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosparametro27" name="text_parametrosparametro27" type="text" class="editingSize editMode" size="3" value="IC4"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosparametro27_show').style.display = '';
				document.getElementById('parametrosparametro27_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosparametro27_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosmedida27_show" onClick="
			document.getElementById('parametrosmedida27_edit').style.display = '';
			document.getElementById('parametrosmedida27_show').style.display = 'none';
			document.getElementById('text_parametrosmedida27').focus();
            ">ppm</span>
        <span id="parametrosmedida27_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosmedida27" id="form_parametrosmedida27" onsubmit="
				document.getElementById('parametrosmedida27_edit').style.display='none';
				document.getElementById('parametrosmedida27_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=27&field=medida&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosmedida27').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosmedida27" name="text_parametrosmedida27" type="text" class="editingSize editMode" size="3" value="ppm"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosmedida27_show').style.display = '';
				document.getElementById('parametrosmedida27_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosmedida27_save" class="savingAjaxWithBackground">Saving...</span></td><td>
<input type="button" class="editingSize" onClick="confirmDelete('27', 'parametros', 'id');" value="Eliminar" />
</td>
</tr><tr class='cell_row' id="parametros_row_28" valign='top'>
<td>28</td><td><span class="editable hand_cursor" id="parametrosslot28_show" onClick="
			document.getElementById('parametrosslot28_edit').style.display = '';
			document.getElementById('parametrosslot28_show').style.display = 'none';
			document.getElementById('text_parametrosslot28').focus();
            ">1216</span>
        <span id="parametrosslot28_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosslot28" id="form_parametrosslot28" onsubmit="
				document.getElementById('parametrosslot28_edit').style.display='none';
				document.getElementById('parametrosslot28_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=28&field=slot&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosslot28').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosslot28" name="text_parametrosslot28" type="text" class="editingSize editMode" size="4" value="1216"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosslot28_show').style.display = '';
				document.getElementById('parametrosslot28_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosslot28_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosparametro28_show" onClick="
			document.getElementById('parametrosparametro28_edit').style.display = '';
			document.getElementById('parametrosparametro28_show').style.display = 'none';
			document.getElementById('text_parametrosparametro28').focus();
            ">NC4</span>
        <span id="parametrosparametro28_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosparametro28" id="form_parametrosparametro28" onsubmit="
				document.getElementById('parametrosparametro28_edit').style.display='none';
				document.getElementById('parametrosparametro28_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=28&field=parametro&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosparametro28').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosparametro28" name="text_parametrosparametro28" type="text" class="editingSize editMode" size="3" value="NC4"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosparametro28_show').style.display = '';
				document.getElementById('parametrosparametro28_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosparametro28_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosmedida28_show" onClick="
			document.getElementById('parametrosmedida28_edit').style.display = '';
			document.getElementById('parametrosmedida28_show').style.display = 'none';
			document.getElementById('text_parametrosmedida28').focus();
            ">ppm</span>
        <span id="parametrosmedida28_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosmedida28" id="form_parametrosmedida28" onsubmit="
				document.getElementById('parametrosmedida28_edit').style.display='none';
				document.getElementById('parametrosmedida28_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=28&field=medida&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosmedida28').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosmedida28" name="text_parametrosmedida28" type="text" class="editingSize editMode" size="3" value="ppm"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosmedida28_show').style.display = '';
				document.getElementById('parametrosmedida28_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosmedida28_save" class="savingAjaxWithBackground">Saving...</span></td><td>
<input type="button" class="editingSize" onClick="confirmDelete('28', 'parametros', 'id');" value="Eliminar" />
</td>
</tr><tr class='odd' id="parametros_row_29" valign='top'>
<td>29</td><td><span class="editable hand_cursor" id="parametrosslot29_show" onClick="
			document.getElementById('parametrosslot29_edit').style.display = '';
			document.getElementById('parametrosslot29_show').style.display = 'none';
			document.getElementById('text_parametrosslot29').focus();
            ">1217</span>
        <span id="parametrosslot29_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosslot29" id="form_parametrosslot29" onsubmit="
				document.getElementById('parametrosslot29_edit').style.display='none';
				document.getElementById('parametrosslot29_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=29&field=slot&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosslot29').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosslot29" name="text_parametrosslot29" type="text" class="editingSize editMode" size="4" value="1217"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosslot29_show').style.display = '';
				document.getElementById('parametrosslot29_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosslot29_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosparametro29_show" onClick="
			document.getElementById('parametrosparametro29_edit').style.display = '';
			document.getElementById('parametrosparametro29_show').style.display = 'none';
			document.getElementById('text_parametrosparametro29').focus();
            ">IC5</span>
        <span id="parametrosparametro29_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosparametro29" id="form_parametrosparametro29" onsubmit="
				document.getElementById('parametrosparametro29_edit').style.display='none';
				document.getElementById('parametrosparametro29_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=29&field=parametro&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosparametro29').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosparametro29" name="text_parametrosparametro29" type="text" class="editingSize editMode" size="3" value="IC5"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosparametro29_show').style.display = '';
				document.getElementById('parametrosparametro29_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosparametro29_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosmedida29_show" onClick="
			document.getElementById('parametrosmedida29_edit').style.display = '';
			document.getElementById('parametrosmedida29_show').style.display = 'none';
			document.getElementById('text_parametrosmedida29').focus();
            ">ppm</span>
        <span id="parametrosmedida29_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosmedida29" id="form_parametrosmedida29" onsubmit="
				document.getElementById('parametrosmedida29_edit').style.display='none';
				document.getElementById('parametrosmedida29_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=29&field=medida&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosmedida29').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosmedida29" name="text_parametrosmedida29" type="text" class="editingSize editMode" size="3" value="ppm"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosmedida29_show').style.display = '';
				document.getElementById('parametrosmedida29_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosmedida29_save" class="savingAjaxWithBackground">Saving...</span></td><td>
<input type="button" class="editingSize" onClick="confirmDelete('29', 'parametros', 'id');" value="Eliminar" />
</td>
</tr><tr class='cell_row' id="parametros_row_30" valign='top'>
<td>30</td><td><span class="editable hand_cursor" id="parametrosslot30_show" onClick="
			document.getElementById('parametrosslot30_edit').style.display = '';
			document.getElementById('parametrosslot30_show').style.display = 'none';
			document.getElementById('text_parametrosslot30').focus();
            ">0127</span>
        <span id="parametrosslot30_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosslot30" id="form_parametrosslot30" onsubmit="
				document.getElementById('parametrosslot30_edit').style.display='none';
				document.getElementById('parametrosslot30_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=30&field=slot&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosslot30').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosslot30" name="text_parametrosslot30" type="text" class="editingSize editMode" size="4" value="0127"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosslot30_show').style.display = '';
				document.getElementById('parametrosslot30_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosslot30_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosparametro30_show" onClick="
			document.getElementById('parametrosparametro30_edit').style.display = '';
			document.getElementById('parametrosparametro30_show').style.display = 'none';
			document.getElementById('text_parametrosparametro30').focus();
            "> Tanque de Viaje</span>
        <span id="parametrosparametro30_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosparametro30" id="form_parametrosparametro30" onsubmit="
				document.getElementById('parametrosparametro30_edit').style.display='none';
				document.getElementById('parametrosparametro30_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=30&field=parametro&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosparametro30').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosparametro30" name="text_parametrosparametro30" type="text" class="editingSize editMode" size="16" value=" Tanque de Viaje"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosparametro30_show').style.display = '';
				document.getElementById('parametrosparametro30_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosparametro30_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosmedida30_show" onClick="
			document.getElementById('parametrosmedida30_edit').style.display = '';
			document.getElementById('parametrosmedida30_show').style.display = 'none';
			document.getElementById('text_parametrosmedida30').focus();
            ">bbls</span>
        <span id="parametrosmedida30_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosmedida30" id="form_parametrosmedida30" onsubmit="
				document.getElementById('parametrosmedida30_edit').style.display='none';
				document.getElementById('parametrosmedida30_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=30&field=medida&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosmedida30').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosmedida30" name="text_parametrosmedida30" type="text" class="editingSize editMode" size="4" value="bbls"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosmedida30_show').style.display = '';
				document.getElementById('parametrosmedida30_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosmedida30_save" class="savingAjaxWithBackground">Saving...</span></td><td>
<input type="button" class="editingSize" onClick="confirmDelete('30', 'parametros', 'id');" value="Eliminar" />
</td>
</tr><tr class='odd' id="parametros_row_31" valign='top'>
<td>31</td><td><span class="editable hand_cursor" id="parametrosslot31_show" onClick="
			document.getElementById('parametrosslot31_edit').style.display = '';
			document.getElementById('parametrosslot31_show').style.display = 'none';
			document.getElementById('text_parametrosslot31').focus();
            ">1221</span>
        <span id="parametrosslot31_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosslot31" id="form_parametrosslot31" onsubmit="
				document.getElementById('parametrosslot31_edit').style.display='none';
				document.getElementById('parametrosslot31_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=31&field=slot&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosslot31').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosslot31" name="text_parametrosslot31" type="text" class="editingSize editMode" size="4" value="1221"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosslot31_show').style.display = '';
				document.getElementById('parametrosslot31_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosslot31_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosparametro31_show" onClick="
			document.getElementById('parametrosparametro31_edit').style.display = '';
			document.getElementById('parametrosparametro31_show').style.display = 'none';
			document.getElementById('text_parametrosparametro31').focus();
            ">C02</span>
        <span id="parametrosparametro31_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosparametro31" id="form_parametrosparametro31" onsubmit="
				document.getElementById('parametrosparametro31_edit').style.display='none';
				document.getElementById('parametrosparametro31_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=31&field=parametro&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosparametro31').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosparametro31" name="text_parametrosparametro31" type="text" class="editingSize editMode" size="3" value="C02"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosparametro31_show').style.display = '';
				document.getElementById('parametrosparametro31_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosparametro31_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosmedida31_show" onClick="
			document.getElementById('parametrosmedida31_edit').style.display = '';
			document.getElementById('parametrosmedida31_show').style.display = 'none';
			document.getElementById('text_parametrosmedida31').focus();
            ">ppm</span>
        <span id="parametrosmedida31_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosmedida31" id="form_parametrosmedida31" onsubmit="
				document.getElementById('parametrosmedida31_edit').style.display='none';
				document.getElementById('parametrosmedida31_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=31&field=medida&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosmedida31').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosmedida31" name="text_parametrosmedida31" type="text" class="editingSize editMode" size="3" value="ppm"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosmedida31_show').style.display = '';
				document.getElementById('parametrosmedida31_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosmedida31_save" class="savingAjaxWithBackground">Saving...</span></td><td>
<input type="button" class="editingSize" onClick="confirmDelete('31', 'parametros', 'id');" value="Eliminar" />
</td>
</tr><tr class='cell_row' id="parametros_row_32" valign='top'>
<td>32</td><td><span class="editable hand_cursor" id="parametrosslot32_show" onClick="
			document.getElementById('parametrosslot32_edit').style.display = '';
			document.getElementById('parametrosslot32_show').style.display = 'none';
			document.getElementById('text_parametrosslot32').focus();
            ">0116</span>
        <span id="parametrosslot32_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosslot32" id="form_parametrosslot32" onsubmit="
				document.getElementById('parametrosslot32_edit').style.display='none';
				document.getElementById('parametrosslot32_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=32&field=slot&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosslot32').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosslot32" name="text_parametrosslot32" type="text" class="editingSize editMode" size="4" value="0116"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosslot32_show').style.display = '';
				document.getElementById('parametrosslot32_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosslot32_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosparametro32_show" onClick="
			document.getElementById('parametrosparametro32_edit').style.display = '';
			document.getElementById('parametrosparametro32_show').style.display = 'none';
			document.getElementById('text_parametrosparametro32').focus();
            ">Weight On Bit</span>
        <span id="parametrosparametro32_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosparametro32" id="form_parametrosparametro32" onsubmit="
				document.getElementById('parametrosparametro32_edit').style.display='none';
				document.getElementById('parametrosparametro32_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=32&field=parametro&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosparametro32').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosparametro32" name="text_parametrosparametro32" type="text" class="editingSize editMode" size="13" value="Weight On Bit"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosparametro32_show').style.display = '';
				document.getElementById('parametrosparametro32_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosparametro32_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosmedida32_show" onClick="
			document.getElementById('parametrosmedida32_edit').style.display = '';
			document.getElementById('parametrosmedida32_show').style.display = 'none';
			document.getElementById('text_parametrosmedida32').focus();
            ">klbs</span>
        <span id="parametrosmedida32_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosmedida32" id="form_parametrosmedida32" onsubmit="
				document.getElementById('parametrosmedida32_edit').style.display='none';
				document.getElementById('parametrosmedida32_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=32&field=medida&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosmedida32').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosmedida32" name="text_parametrosmedida32" type="text" class="editingSize editMode" size="4" value="klbs"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosmedida32_show').style.display = '';
				document.getElementById('parametrosmedida32_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosmedida32_save" class="savingAjaxWithBackground">Saving...</span></td><td>
<input type="button" class="editingSize" onClick="confirmDelete('32', 'parametros', 'id');" value="Eliminar" />
</td>
</tr><tr class='odd' id="parametros_row_33" valign='top'>
<td>33</td><td><span class="editable hand_cursor" id="parametrosslot33_show" onClick="
			document.getElementById('parametrosslot33_edit').style.display = '';
			document.getElementById('parametrosslot33_show').style.display = 'none';
			document.getElementById('text_parametrosslot33').focus();
            ">0120</span>
        <span id="parametrosslot33_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosslot33" id="form_parametrosslot33" onsubmit="
				document.getElementById('parametrosslot33_edit').style.display='none';
				document.getElementById('parametrosslot33_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=33&field=slot&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosslot33').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosslot33" name="text_parametrosslot33" type="text" class="editingSize editMode" size="4" value="0120"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosslot33_show').style.display = '';
				document.getElementById('parametrosslot33_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosslot33_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosparametro33_show" onClick="
			document.getElementById('parametrosparametro33_edit').style.display = '';
			document.getElementById('parametrosparametro33_show').style.display = 'none';
			document.getElementById('text_parametrosparametro33').focus();
            ">RPM</span>
        <span id="parametrosparametro33_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosparametro33" id="form_parametrosparametro33" onsubmit="
				document.getElementById('parametrosparametro33_edit').style.display='none';
				document.getElementById('parametrosparametro33_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=33&field=parametro&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosparametro33').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosparametro33" name="text_parametrosparametro33" type="text" class="editingSize editMode" size="3" value="RPM"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosparametro33_show').style.display = '';
				document.getElementById('parametrosparametro33_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosparametro33_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosmedida33_show" onClick="
			document.getElementById('parametrosmedida33_edit').style.display = '';
			document.getElementById('parametrosmedida33_show').style.display = 'none';
			document.getElementById('text_parametrosmedida33').focus();
            ">rpm</span>
        <span id="parametrosmedida33_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosmedida33" id="form_parametrosmedida33" onsubmit="
				document.getElementById('parametrosmedida33_edit').style.display='none';
				document.getElementById('parametrosmedida33_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=33&field=medida&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosmedida33').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosmedida33" name="text_parametrosmedida33" type="text" class="editingSize editMode" size="3" value="rpm"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosmedida33_show').style.display = '';
				document.getElementById('parametrosmedida33_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosmedida33_save" class="savingAjaxWithBackground">Saving...</span></td><td>
<input type="button" class="editingSize" onClick="confirmDelete('33', 'parametros', 'id');" value="Eliminar" />
</td>
</tr><tr class='cell_row' id="parametros_row_34" valign='top'>
<td>34</td><td><span class="editable hand_cursor" id="parametrosslot34_show" onClick="
			document.getElementById('parametrosslot34_edit').style.display = '';
			document.getElementById('parametrosslot34_show').style.display = 'none';
			document.getElementById('text_parametrosslot34').focus();
            ">0118</span>
        <span id="parametrosslot34_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosslot34" id="form_parametrosslot34" onsubmit="
				document.getElementById('parametrosslot34_edit').style.display='none';
				document.getElementById('parametrosslot34_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=34&field=slot&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosslot34').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosslot34" name="text_parametrosslot34" type="text" class="editingSize editMode" size="4" value="0118"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosslot34_show').style.display = '';
				document.getElementById('parametrosslot34_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosslot34_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosparametro34_show" onClick="
			document.getElementById('parametrosparametro34_edit').style.display = '';
			document.getElementById('parametrosparametro34_show').style.display = 'none';
			document.getElementById('text_parametrosparametro34').focus();
            ">Torque</span>
        <span id="parametrosparametro34_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosparametro34" id="form_parametrosparametro34" onsubmit="
				document.getElementById('parametrosparametro34_edit').style.display='none';
				document.getElementById('parametrosparametro34_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=34&field=parametro&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosparametro34').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosparametro34" name="text_parametrosparametro34" type="text" class="editingSize editMode" size="6" value="Torque"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosparametro34_show').style.display = '';
				document.getElementById('parametrosparametro34_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosparametro34_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosmedida34_show" onClick="
			document.getElementById('parametrosmedida34_edit').style.display = '';
			document.getElementById('parametrosmedida34_show').style.display = 'none';
			document.getElementById('text_parametrosmedida34').focus();
            ">lb.pies</span>
        <span id="parametrosmedida34_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosmedida34" id="form_parametrosmedida34" onsubmit="
				document.getElementById('parametrosmedida34_edit').style.display='none';
				document.getElementById('parametrosmedida34_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=34&field=medida&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosmedida34').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosmedida34" name="text_parametrosmedida34" type="text" class="editingSize editMode" size="7" value="lb.pies"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosmedida34_show').style.display = '';
				document.getElementById('parametrosmedida34_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosmedida34_save" class="savingAjaxWithBackground">Saving...</span></td><td>
<input type="button" class="editingSize" onClick="confirmDelete('34', 'parametros', 'id');" value="Eliminar" />
</td>
</tr><tr class='odd' id="parametros_row_35" valign='top'>
<td>35</td><td><span class="editable hand_cursor" id="parametrosslot35_show" onClick="
			document.getElementById('parametrosslot35_edit').style.display = '';
			document.getElementById('parametrosslot35_show').style.display = 'none';
			document.getElementById('text_parametrosslot35').focus();
            ">0228</span>
        <span id="parametrosslot35_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosslot35" id="form_parametrosslot35" onsubmit="
				document.getElementById('parametrosslot35_edit').style.display='none';
				document.getElementById('parametrosslot35_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=35&field=slot&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosslot35').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosslot35" name="text_parametrosslot35" type="text" class="editingSize editMode" size="4" value="0228"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosslot35_show').style.display = '';
				document.getElementById('parametrosslot35_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosslot35_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosparametro35_show" onClick="
			document.getElementById('parametrosparametro35_edit').style.display = '';
			document.getElementById('parametrosparametro35_show').style.display = 'none';
			document.getElementById('text_parametrosparametro35').focus();
            ">GPM</span>
        <span id="parametrosparametro35_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosparametro35" id="form_parametrosparametro35" onsubmit="
				document.getElementById('parametrosparametro35_edit').style.display='none';
				document.getElementById('parametrosparametro35_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=35&field=parametro&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosparametro35').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosparametro35" name="text_parametrosparametro35" type="text" class="editingSize editMode" size="3" value="GPM"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosparametro35_show').style.display = '';
				document.getElementById('parametrosparametro35_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosparametro35_save" class="savingAjaxWithBackground">Saving...</span></td><td><span class="editable hand_cursor" id="parametrosmedida35_show" onClick="
			document.getElementById('parametrosmedida35_edit').style.display = '';
			document.getElementById('parametrosmedida35_show').style.display = 'none';
			document.getElementById('text_parametrosmedida35').focus();
            ">gal/lm</span>
        <span id="parametrosmedida35_edit" style="display: none;">
            <form style="display: inline;" name="form_parametrosmedida35" id="form_parametrosmedida35" onsubmit="
				document.getElementById('parametrosmedida35_edit').style.display='none';
				document.getElementById('parametrosmedida35_save').style.display='';
                var req = '/wellmobil/admin.php?ajaxAction=update&id=35&field=medida&table=parametros&pk=id&val=' + escape(document.getElementById('text_parametrosmedida35').value);
				sndUpdateReq(req);
				return false;
			"><input ONKEYPRESS="" id="text_parametrosmedida35" name="text_parametrosmedida35" type="text" class="editingSize editMode" size="6" value="gal/lm"/>

			<input type="button" class="editingSize" value="Cancel" onClick="

				document.getElementById('parametrosmedida35_show').style.display = '';
				document.getElementById('parametrosmedida35_edit').style.display = 'none';
			"/>
			</form>
		</span>
        <span style="display: none;" id="parametrosmedida35_save" class="savingAjaxWithBackground">Saving...</span></td><td>
<input type="button" class="editingSize" onClick="confirmDelete('35', 'parametros', 'id');" value="Eliminar" />
</td>
</tr></table>
</div><br />
<center>
   <input type="button" value="Insertar Parametros" class="btn editingSize" onClick="$('#add_form_parametros').slideDown('slow');">
</center>
<form action="/wellmobil/admin.php#ajaxCRUD" id="add_form_parametros" method="POST" ENCTYPE="multipart/form-data" style="display:none;">
<br /><h3>New <b>Parametros</b></h3>
<table align='center' name='form'>
<tr valign='top'>
<th width='20%'>slot</th><td><input  onKeyPress="" class="editingSize " type="text" id="slot" name="slot" size="" value="" maxlength="150"></td></tr>
<th width='20%'>parametro</th><td><input  onKeyPress="" class="editingSize " type="text" id="parametro" name="parametro" size="" value="" maxlength="150"></td></tr>
<th width='20%'>medida</th><td><input  onKeyPress="" class="editingSize " type="text" id="medida" name="medida" size="" value="" maxlength="150"></td></tr>
</tr><tr><td>
<input class="editingSize" type="button" onClick="validateAddForm('parametros', false);" value="Save Parametros"></td><td><input style='float: right;' class="editingSize" type="button" onClick="this.form.reset();$('#add_form_parametros').slideUp('slow');" value="Cancel"></td></tr>
</table>
<input type="hidden" name="action" value="add">
<input type="hidden" name="table" value="parametros">
</form>

	</div>
</div>
<div id="footer">
	<div class="footer">
		Propiedad de  Alberto Salomon Ariza <br/> Celular +(0051) 970919308<br/>Email : online@wellmobil.net<br/>Lima - Peru
	</div>
</div>

</body>
</html><?php }} ?>