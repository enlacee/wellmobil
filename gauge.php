<?php
session_start();

if(empty($_SESSION['user']['id']))
{
	echo "<script>";
	echo "window.location = 'index';";
	echo "</script>";
}
require('models/Consulta.class.php');
$consulta = new Consultas;
$valor = $consulta->get_PARAMETRO_by_slot($_GET['slot']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-au" lang="en-au" dir="ltr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Graficos</title>
		
		<!-- INCLUDE THE FOLLOWING JGAUGE REQUIREMENTS... -->
		<link rel="stylesheet" href="templates/style.css" type="text/css" /> <!-- CSS for jGauge styling. -->
		<link rel="stylesheet" href="templates/jgauge.css" type="text/css" /> <!-- CSS for jGauge styling. -->
		<!--[if IE]><script type="text/javascript" language="javascript" src="js/excanvas.min.js"></script><![endif]--> <!-- Extends canvas support to IE. (Possibly buggy, need to look into this.) -->
		<script language="javascript" type="text/javascript" src="libs/gauge/jquery-1.4.2.min.js"></script> <!-- jQuery JavaScript library. -->
		<script language="javascript" type="text/javascript" src="libs/gauge/jQueryRotate.min.js"></script> <!-- jQueryRotate plugin used for needle movement. -->
		<script language="javascript" type="text/javascript" src="libs/gauge/jgauge-0.3.0.a3.js"></script> <!-- jGauge JavaScript. -->
	</head>
	<body>
<?php if(!isset($_GET['no_titulo'])){?>
		<h2>Medidor del slot <?php echo $valor[0][2] ?></h2>
<?php }?>
			<div id="jGaugeDemo3" class="jgauge"></div>
	
			<!-- This script block defines the gauge parameters and includes some simple
			     functions to test the jGauge with (the above links use this) -->
			<script type="text/javascript">				
				// DEMOGAUGE3 - This gauge is more complex to show a completely different style and is updated with random values...
				var demoGauge3 = new jGauge(); // Create a new jGauge.
				demoGauge3.id = 'jGaugeDemo3'; // Link the new jGauge to the placeholder DIV.
				//demoGauge3.autoPrefix = autoPrefix.si; // Use SI prefixing (i.e. 1k = 1000).
				demoGauge3.autoPrefix = autoPrefix.no; // Use SI prefixing (i.e. 1k = 1000).
				demoGauge3.imagePath = 'templates/images/jgauge_face_taco.png';
				demoGauge3.segmentStart = -225
				demoGauge3.segmentEnd = 45
				demoGauge3.width = 300;
				demoGauge3.height = 300;
				demoGauge3.needle.imagePath = 'templates/images/jgauge_needle_taco.png';
				demoGauge3.needle.xOffset = 0;
				demoGauge3.needle.yOffset = 0;
				demoGauge3.label.yOffset = 55;
				demoGauge3.label.color = '#fff';
				demoGauge3.label.precision = 5; // 0 decimals (whole numbers).
				demoGauge3.label.suffix = '<?php echo $valor[0][3] ?> '; // Make the value label watts.
				demoGauge3.ticks.labelRadius = 90;
				demoGauge3.ticks.labelColor = '#0ce';
				demoGauge3.ticks.start = 0;
				demoGauge3.ticks.end = <?php echo $valor[0][4] ?>;
				demoGauge3.ticks.count = 11;
				demoGauge3.ticks.color = 'rgba(0, 0, 0, 0)';
				demoGauge3.range.color = 'rgba(0, 0, 0, 0)';
				
                                
				// This function is called by jQuery once the page has finished loading.
				$(document).ready(function()
				{
					demoGauge3.init(); // Put the jGauge on the page by initializing it.
					
					// Configure demoGauge3 for random value updates.
					demoGauge3.setValue(100);
					//setInterval('randVal()', 100);
					setInterval('cargarContenido()', 2000);
					
				});
				
				// That's all folks! We've created a jGauge and put it on the page! :-D
				// The following JavaScript functions are for the demonstration.
				// ----------------------------------------------------------------------
				
				
				// This is our random value function for gauge 3.
				function randVal()
				{
				        /*var newValue;
				        if (Math.random() > 0.8) // Allow needle to randomly pause.
				        {
				                newValue = demoGauge3.value + (Math.random() * 100 - 50);
				                if (newValue >= demoGauge3.ticks.start && newValue <= demoGauge3.ticks.end)
				                {
				                        // newValue is within range, so update.
				                        demoGauge3.setValue(newValue);
				                }
				        }*/
						
						http.open("GET","gauge_value.php?id=<?php echo $_GET['id'];?>&slot=<?php echo $_GET['slot'];?>", true); 
						http.onreadystatechange = handleHttpResponse; 
						http.send(null); 
			
				}
				
				function nuevoAjax()
				{
					var xmlhttp=false;
					try {
					xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
					} catch (e) {
					try {
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
					} catch (E) {
					xmlhttp = false;
					}
					}

					if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
					xmlhttp = new XMLHttpRequest();
					}
					return xmlhttp;
				}

				function cargarContenido()
				{
					ajax=nuevoAjax();
					ajax.open("GET","gauge_value.php?id=<?php echo $_GET['id'];?>&slot=<?php echo $_GET['slot'];?>", true);
					ajax.onreadystatechange=function() {
					if (ajax.readyState==4) {
					demoGauge3.setValue(ajax.responseText);
					}
					}
					ajax.send(null)
				}
				
			</script>
		
	</body>
</html>

