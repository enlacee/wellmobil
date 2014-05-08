<!DOCTYPE html> 
<html> 
<head> 
	<title></title> 
	<meta charset="utf-8"> 
	<link rel="stylesheet" href="templates/style.css" />
	<script type="text/javascript" src="libs/jquery.js"></script>
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
	<tr>
	<td rowspan='2'>
		<div class='datos'>
		{$titulo}
		</div>
	</td>
	<td rowspan='2'>
		<h1>PARAMETROS DE PERFORACION</h1>
	</td>
	<td>
		<div id='menu'>
		{$menu}
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
    <iframe src="grafico_perforacion?id={$id}" id="destino2"></iframe>
	<iframe src="about:blank" id="destino"></iframe>
	<iframe src="about:blank" id="destino1"></iframe>
	<div class="clear"></div>
	
{include file="footer.tpl"}
