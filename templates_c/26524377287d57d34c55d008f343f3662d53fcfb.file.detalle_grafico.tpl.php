<?php /* Smarty version Smarty-3.1.8, created on 2013-04-12 20:14:43
         compiled from "./templates/detalle_grafico.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11768322435160c24cecaa21-98157456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26524377287d57d34c55d008f343f3662d53fcfb' => 
    array (
      0 => './templates/detalle_grafico.tpl',
      1 => 1365815680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11768322435160c24cecaa21-98157456',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5160c24cf338e1_70467625',
  'variables' => 
  array (
    'menu' => 0,
    'titulo' => 0,
    'titulo_' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5160c24cf338e1_70467625')) {function content_5160c24cf338e1_70467625($_smarty_tpl) {?><!DOCTYPE html> 
<html> 
<head> 
	<title></title> 
	<meta charset="utf-8"> 
	<link rel="stylesheet" href="templates/style.css" />
<link rel="stylesheet" type="text/css" href="templates/overlay-basic.css">
	<script type="text/javascript" src="libs/jquery.js"></script>
<script src="libs/jquery-1.7.1.min.js"></script>
<script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>

	
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
	
	
</head>
<body onLoad="muestraReloj()">


<div id='content'>
	<div class='content1'>
	<table cellpadding='0' cellspacing='0'>
<tr><td colspan="4">
		<div id='menu'>
		<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

		</div>
	</td>
   
	</tr>
	<tr>
	<td >
		<div class='datos'>
	 <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>

		</div>
	</td>
<td >
		<div class='datos'>
	 <?php echo $_smarty_tpl->tpl_vars['titulo_']->value;?>

		</div>
	</td>
	<td >
		<h1>PARAMETROS EN TIEMPO REAL</h1>
	</td>
	
	<td>
		<div id="spanreloj"></div>
	</td>
	</tr>
	</table>
	<div class='clear'></div>
<table style="background:#FFF;"><tr>
<td colspan="2">           
<iframe width='900' height='840' style='border:none;' src="modog_perforacion?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" ></iframe></td></tr>
</tr><td>
<iframe width='570' height='450' style='border:none;float:left;' src="modog_succion?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" ></iframe>
</td>
<td>
<iframe width='330' height='450' style='border:none;float:left;' src="modog_bombas?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" ></iframe>	
</td>
</tr>
</table>
</div>


	
	
	<div class="clear"></div>
	
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>