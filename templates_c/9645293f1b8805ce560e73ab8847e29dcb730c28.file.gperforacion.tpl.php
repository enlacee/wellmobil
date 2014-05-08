<?php /* Smarty version Smarty-3.1.8, created on 2013-04-05 15:46:22
         compiled from "./templates/gperforacion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1020486925159a69b2ef369-33632753%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9645293f1b8805ce560e73ab8847e29dcb730c28' => 
    array (
      0 => './templates/gperforacion.tpl',
      1 => 1365194497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1020486925159a69b2ef369-33632753',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5159a69b3681b9_09082752',
  'variables' => 
  array (
    'script' => 0,
    'titulo' => 0,
    'menu' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5159a69b3681b9_09082752')) {function content_5159a69b3681b9_09082752($_smarty_tpl) {?><!DOCTYPE html> 
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
	<div class='content1'>
	<table cellpadding='0' cellspacing='0' width='100%'>
	<tr>
	<td rowspan='2'>
		<div class='datos'>
		<?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>

		</div>
	</td>
	<td rowspan='2'>
		<h1>PARAMETROS DE PERFORACION</h1>
	</td>
	<td>
		<div id='menu'>
		<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

		</div>
	</td>
    <td>&ensp;</td>
	</tr>
	<tr>
	<td>
		<div id="spanreloj"></div>
	</td>
	</tr>
	</table>
	<div class='clear'></div>
	<div id="responsecontainer"></div>
    <iframe src="grafico_perforacion?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" id="destino2"></iframe>
	<iframe src="about:blank" id="destino"></iframe>
	<iframe src="about:blank" id="destino1"></iframe>
	<div class="clear"></div>
	
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>