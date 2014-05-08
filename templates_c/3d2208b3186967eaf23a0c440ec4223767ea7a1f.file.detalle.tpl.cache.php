<?php /* Smarty version Smarty-3.1.8, created on 2012-08-07 22:29:12
         compiled from ".\templates\detalle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13743501991044b5308-41095816%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d2208b3186967eaf23a0c440ec4223767ea7a1f' => 
    array (
      0 => '.\\templates\\detalle.tpl',
      1 => 1344372855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13743501991044b5308-41095816',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50199104842d09_00459103',
  'variables' => 
  array (
    'script' => 0,
    'parametro' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50199104842d09_00459103')) {function content_50199104842d09_00459103($_smarty_tpl) {?><!DOCTYPE html> 
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
		cadenareloj = "" + horas + ":" + minutos + ":" + segundos + " " + mt + "";
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
	
	<?php echo $_smarty_tpl->tpl_vars['script']->value;?>

</head>
<body onLoad="muestraReloj()">
<div id='content'>
	<div class='content'>	
	<span id="spanreloj"></span>
	<h1></h1>
	<div id="responsecontainer"></div>
	<div id="parametro">
	<ul id='parametro'>
	<?php echo $_smarty_tpl->tpl_vars['parametro']->value;?>

	</ul>
	</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>