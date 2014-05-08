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

<!DOCTYPE html >
<html>
<head>
     <script src="libs/rgraph/RGraph.common.core.js" ></script>
    <script src="libs/rgraph/RGraph.common.dynamic.js" ></script>
    <script src="libs/rgraph/RGraph.common.effects.js" ></script>
    <script src="libs/rgraph/RGraph.gauge.js" ></script>
    <!--[if lt IE 9]><script src="libs/rgraph/excanvas.js"></script><![endif]-->
   
    </head>
<body>
  <canvas id="cvs" width="240" height="240">[No canvas support]</canvas>
    
    <script>
        window.onload = function ()
        {


var rango=<?php  echo (!empty($valor[0][4]))?$valor[0][4]:0; ?>;
            var gauge = new RGraph.Gauge('cvs', 0,rango,0);
            //gauge.Set('chart.angles.start', PI - (PI / 8));
            //gauge.Set('chart.angles.end', TWOPI + (PI / 8));
            gauge.Set('chart.border.outline', 'transparent');
            gauge.Set('chart.needle.colors', ['red']);
            gauge.Set('chart.needle.type', 'line');
            gauge.Set('chart.needle.tail', true);
            gauge.Set('chart.needle.size', 55);
            gauge.Set('chart.centerpin.radius', 0.1);
            gauge.Set('chart.title.top', '<?php echo $valor[0][2] ?>');
            gauge.Set('chart.title.top.size', 'Italic 16');
	    gauge.Set('chart.title.top.font', 'Impact');
            gauge.Set('chart.title.top.color', 'black');
            gauge.Set('chart.title.top.pos', 0.8);
            gauge.Set('chart.title.bottom.size', 'Italic 10'); // Hmmmm
            gauge.Set('chart.title.bottom.font', 'Impact');
            gauge.Set('chart.title.bottom.color', 'Black');
            gauge.Set('chart.title.bottom', '0 <?php echo $valor[0][3] ?>');
            gauge.Set('chart.title.bottom.pos', 0.7);
            gauge.Set('chart.labels.centered', true);
            gauge.Set('chart.labels.offset', 7);
        
            /**
            * This draws a simple gray circle over the centerpin
            */
            function myCenterpin (obj)
            {
                // This circle becomes the border of the centerpin
                obj.context.beginPath();
                    obj.context.fillStyle = '#aaa';
                    obj.context.arc(obj.centerx, obj.centery, 10, 0, TWOPI, false);
                obj.context.fill();
            }
            RGraph.AddCustomEventListener(gauge, 'ondraw', myCenterpin);
        
            gauge.Draw();




            var delay = 1500;



var cont=0;
            function myAJAXCallback()
            {
                /**
                * The responseText is actually a comma separated list of numbers, but converting it to a number with parseInt()
                * will change it so that it's just the first number
                */
                var data = parseFloat(this.responseText);
                
               gauge.value = data;
texto=data+ ' <?php echo $valor[0][3] ?>';
                gauge.Set('chart.title.bottom',texto );
                RGraph.Effects.Gauge.Grow(gauge);
                
                
                // Make another AJAX call after the delay (which is in milliseconds)
                setTimeout(function () {RGraph.AJAX('gauge_value.php?id=<?php echo $_GET['id'];?>&slot=<?php echo $_GET['slot'];?>', myAJAXCallback);}, delay);
            }




            /**
            * Make the AJAX call every so often (contolled by the delay variable)
            */
            setTimeout(function () {RGraph.AJAX('gauge_value.php?id=<?php echo $_GET['id'];?>&slot=<?php echo $_GET['slot'];?>', myAJAXCallback);}, delay);
        }
    </script>

    

</body>
</html>
