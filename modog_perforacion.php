<html>
<head>
    
    
    <script src="libs/rgraph/RGraph.common.core.js" ></script>
      <script src="libs/rgraph/RGraph.thermometer.js" ></script>
    <!--[if lt IE 9]><script src="libs/rgraph/excanvas.js"></script><![endif]-->
    
    
    <style>body{color:#90F491;font-size:12px;background:#FFF;}table{ float:left;}iframe{border:none;}</style>
</head>
<body>

<table>
<tr><td><iframe src="modog_gauge?id=<?php echo $_GET['id']?>&slot=0118&no_titulo=true" width='270' height='270'></iframe></td><td rowspan="3"><table>

<tr ><td colspan='3' style="background:yellow;color:red;"  ><h2 style="text-align:center;margin-top:20px;" id="perf">&nbsp</h2></td></tr><tr>


<tr>
<td >
    <canvas id="cvs_td" width="100"  height="700">[No canvas support]</canvas>
</td>
<td>
    <canvas id="cvs_bd" width="100" height="700">[No canvas support]</canvas>
</td>
<td>
    <canvas id="cvs_b" width="100" height="700">[No canvas support]</canvas>
</td>
</tr>

</table>
</td><td><iframe src="modog_gauge?id=<?php echo $_GET['id']?>&slot=0114&no_titulo=true" width='270' height='270'></iframe></td></tr>
<tr><td><iframe src="modog_gauge?id=<?php echo $_GET['id']?>&slot=0121&no_titulo=true" width='270' height='270'></iframe> </td><td><iframe src="modog_gauge?id=<?php echo $_GET['id']?>&slot=0113&no_titulo=true" width='270' height='270'></iframe></td></tr>
<tr><td>
<iframe src="modog_gauge?id=<?php echo $_GET['id']?>&slot=0116&no_titulo=true" width='270' height='270'></iframe> 
</td> 
<td>
<iframe src="modog_gauge?id=<?php echo $_GET['id']?>&slot=0120&no_titulo=true" width='270' height='270'></iframe> 
</td> </tr>

</table>
    
    <script>
        window.onload = function ()
        {
function Limpiar(cvs){
var oCanvas = document.getElementById(cvs);
var oContext = oCanvas.getContext("2d");
oContext.clearRect(0, 0, oCanvas.width, oCanvas.height);

}
           /* var thermometer_td = new RGraph.Thermometer('cvs_td', 0,10000,0);
            var thermometer_bd = new RGraph.Thermometer('cvs_bd', 0,10000,0);
            var thermometer_b = new RGraph.Thermometer('cvs_b', 0,10000,0);
            thermometer_td.Draw();
            thermometer_bd.Draw();
            thermometer_b.Draw();*/
var delay = 1500;
var total=0;
var DB=-1;


            function myAJAXCallback()
            {
Limpiar("cvs_td");
                /**
                * The responseText is actually a comma separated list of numbers, but converting it to a number with parseInt()
                * will change it so that it's just the first number
                */
                var data = parseFloat(this.responseText);
                
               total=data;
		
                new RGraph.Thermometer('cvs_td', 0,10000,data)
              .Set('chart.title', 'Total Depth')
                   .Set('colors', [ 'gradient(#eef:green)'])
                   .Draw();
                //thermometer_td.value = data;
                //thermometer_td.Draw();
                
                
                // Make another AJAX call after the delay (which is in milliseconds)
                setTimeout(function () {RGraph.AJAX('gauge_value.php?id=<?php echo $_GET['id']?>&slot=0110', myAJAXCallback);}, delay);
            }
function myAJAXCallback2()
            {
                /**
                * The responseText is actually a comma separated list of numbers, but converting it to a number with parseInt()
                * will change it so that it's just the first number
                */
                var data = parseFloat(this.responseText);
                Limpiar("cvs_bd");
              
                new RGraph.Thermometer('cvs_bd', 0,10000,data)
              .Set('chart.title', 'Bith Depth').Draw();
                //thermometer_td.value = data;
                //thermometer_td.Draw();
                
                
                // Make another AJAX call after the delay (which is in milliseconds)
                setTimeout(function () {RGraph.AJAX('gauge_value.php?id=<?php echo $_GET['id']?>&slot=0108', myAJAXCallback2);}, delay);
            }
function myAJAXCallback3()
            {
                /**
                * The responseText is actually a comma separated list of numbers, but converting it to a number with parseInt()
                * will change it so that it's just the first number
                */
                var data = parseFloat(this.responseText);
                limite=(data>100)?data:100;
               Limpiar("cvs_b");
                new RGraph.Thermometer('cvs_b', 0,limite,data)
		.Set('colors', [ 'gradient(#eef:blue)'])
              .Set('chart.title', 'Block')
		.Draw();
                //thermometer_td.value = data;
                //thermometer_td.Draw();
                
                
                // Make another AJAX call after the delay (which is in milliseconds)
                setTimeout(function () {RGraph.AJAX('gauge_value.php?id=<?php echo $_GET['id']?>&slot=0112', myAJAXCallback3);}, delay);
            }

function ActualizarEstado()
            {
var estado=document.getElementById("perf");
estado.innerHTML=this.responseText;
setTimeout(function () {
estado.innerHTML="&nbsp;";
RGraph.AJAX('estado_perforacion.php?id=<?php echo $_GET['id']?>', ActualizarEstado);}, delay);
            }




            /**
            * Make the AJAX call every so often (contolled by the delay variable)
            */
  setTimeout(function () {
RGraph.AJAX('gauge_value.php?id=<?php echo $_GET['id']?>&slot=0110', myAJAXCallback);
RGraph.AJAX('gauge_value.php?id=<?php echo $_GET['id']?>&slot=0108', myAJAXCallback2);
RGraph.AJAX('gauge_value.php?id=<?php echo $_GET['id']?>&slot=0112', myAJAXCallback3);
RGraph.AJAX('estado_perforacion.php?id=<?php echo $_GET['id']?>', ActualizarEstado);

}, delay);


        }
    </script>

    

</body>
</html>

