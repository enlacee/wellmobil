<?php /* Smarty version Smarty-3.1.8, created on 2012-08-08 10:33:38
         compiled from "./templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1343701462502278dbdd6646-31217990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97c13ae6868bbc459509c9f1b968154acd23eecc' => 
    array (
      0 => './templates/header.tpl',
      1 => 1344439942,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1343701462502278dbdd6646-31217990',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_502278dbe0c2a6_85213863',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_502278dbe0c2a6_85213863')) {function content_502278dbe0c2a6_85213863($_smarty_tpl) {?><!DOCTYPE html> 
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
	<div class='content'><?php }} ?>