<?php /* Smarty version Smarty-3.1.8, created on 2013-04-05 15:38:41
         compiled from "./templates/gvolumenes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20671196795159d498034f59-07950290%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '147c9d353a5e44b8760e83fcc0bd6809c845dfdd' => 
    array (
      0 => './templates/gvolumenes.tpl',
      1 => 1365194313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20671196795159d498034f59-07950290',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5159d4980a3fa5_31818738',
  'variables' => 
  array (
    'script' => 0,
    'titulo' => 0,
    'menu' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5159d4980a3fa5_31818738')) {function content_5159d4980a3fa5_31818738($_smarty_tpl) {?><!DOCTYPE html> 
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
		<h1>VOLUMENES EN TIEMPO REAL</h1>
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
    <iframe src="grafico_volumenes?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" id="destino2"></iframe>
	<iframe src="about:blank" id="destino"></iframe>
	<iframe src="about:blank" id="destino1"></iframe>
	<div class="clear"></div>
	
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>