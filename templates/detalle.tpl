<!DOCTYPE html> 
<html> 
<head> 
	<title></title> 
	<meta charset="utf-8"> 
	<link rel="stylesheet" href="templates/style.css" />
<link rel="stylesheet" type="text/css" href="templates/overlay-basic.css">
	<script type="text/javascript" src="libs/jquery.js"></script>
<script src="libs/jquery-1.7.1.min.js"></script>
<script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>

	{literal}
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
	{/literal}
	{$script}
</head>
<body onLoad="muestraReloj()">


<div id='content'>
	<div class='content1'>
	<table cellpadding='0' cellspacing='0' width='100%'>
<tr><td colspan="4">
		<div id='menu'>
		{$menu}
		</div>
	</td>
   
	</tr>
	<tr>
	<td >
		<div class='datos'>
	 {$titulo}
		</div>
	</td>
<td >
		<div class='datos'>
	 {$titulo_}
		</div>
	</td>
	<td >
		<h1>PARAMETROS EN TIEMPO REAL</h1>
	</td>
	
	<td>
		<div id="spanreloj"></div>
	</td>
	</tr>
<!--
<tr><td></td><td></td><td><a href="exp_litologia?id={$pozo}"><img src="images/xls.png" width="48"><span style="color:#90F491;">Exportar Litologia</span></a></td></td></tr>-->
	</table>
	<div class='clear'></div>
           <div  style="top: 65px; left: 301.5px; position: fixed; display: none;" class="simple_overlay" id="mies10"><a  class="close" onclick='document.getElementById(\"destino\").src = "about:blank";  return false'></a>
<iframe src="about:blank" id="destino"></iframe>
	
</div>


	<div id="responsecontainer"></div>
	
	<div class="clear"></div>
	
{include file="footer.tpl"}
