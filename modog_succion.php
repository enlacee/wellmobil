<html>
<head>
    
    
    <script src="libs/rgraph/RGraph.common.core.js" ></script>
 
<script src="libs/rgraph/RGraph.common.dynamic.js" ></script>
<script src="libs/rgraph/RGraph.common.key.js" ></script>
      <script src="libs/rgraph/RGraph.vprogress.js" ></script>
    <!--[if lt IE 9]><script src="libs/rgraph/excanvas.js"></script><![endif]-->
    
    
    <style>body{color:#90F491;font-size:12px;}table{ float:left;}iframe{border:none;}</style>
</head>
<body>

    
<table >


<tr>
<td style="background:#FFF;">
    <canvas id="cvs_td" width="170" height="400">[No canvas support]</canvas>
</td>

<td style="background:#FFF;">
    <canvas id="cvs_bd" width="185" height="400">[No canvas support]</canvas>
</td>
<td style="background:#FFF;">
    <canvas id="cvs_b" width="190" height="400">[No canvas support]</canvas>
</td>
</tr>
</table>
    <script>
        window.onload = function ()
        {
           function Limpiar(cvs){
var oCanvas = document.getElementById(cvs);
var oContext = oCanvas.getContext("2d");
oContext.clearRect(0, 0, oCanvas.width, oCanvas.height);

}
function CrearBarra(cvs,valor,limite,margen,titulo){
texto=titulo+" ("+valor+")";
Limpiar(cvs);
temp=new RGraph.VProgress(cvs,valor, limite)
                .Set('colors', [ 'gradient(#FFC000:#FFC000)'])
		.Set('key', [texto])
             	.Set('tickmarks.inner', true)
                .Set('margin', 5)
                .Set('strokestyle.inner', 'rgba(255,255,255,255)')
                .Set('gutter.right', margen)
                .Set('bevel', true);
temp.Set('key.position.x', temp.canvas.width - 140);
                temp.Draw();

            
                        
}
var delay = 1500;



            function myAJAXCallback()
            {
                /**
                * The responseText is actually a comma separated list of numbers, but converting it to a number with parseInt()
                * will change it so that it's just the first number
                */
                var data = parseFloat(this.responseText);
                
               CrearBarra('cvs_td',data,400,47,'Succion');
                
                
                
                // Make another AJAX call after the delay (which is in milliseconds)
                setTimeout(function () {RGraph.AJAX('gauge_value.php?id=<?php echo $_GET['id']?>&slot=0144', myAJAXCallback);}, delay);
            }
function myAJAXCallback2()
            {
                /**
                * The responseText is actually a comma separated list of numbers, but converting it to a number with parseInt()
                * will change it so that it's just the first number
                */
                var data = parseFloat(this.responseText);
                
             
                CrearBarra('cvs_bd',data,100,60,'Viaje');
                
                
                // Make another AJAX call after the delay (which is in milliseconds)
                setTimeout(function () {RGraph.AJAX('gauge_value.php?id=<?php echo $_GET['id']?>&slot=0127', myAJAXCallback2);}, delay);
            }
function myAJAXCallback3()
            {
                /**
                * The responseText is actually a comma separated list of numbers, but converting it to a number with parseInt()
                * will change it so that it's just the first number
                */
                var data = parseFloat(this.responseText);
                
               
                CrearBarra('cvs_b',data,200,65,'Retorno');
                
                
                // Make another AJAX call after the delay (which is in milliseconds)
                setTimeout(function () {RGraph.AJAX('gauge_value.php?id=<?php echo $_GET['id']?>&slot=0142', myAJAXCallback3);}, delay);
            }




            /**
            * Make the AJAX call every so often (contolled by the delay variable)
            */
  setTimeout(function () {
RGraph.AJAX('gauge_value.php?id=<?php echo $_GET['id']?>&slot=0144', myAJAXCallback);
RGraph.AJAX('gauge_value.php?id=<?php echo $_GET['id']?>&slot=0127', myAJAXCallback2);
RGraph.AJAX('gauge_value.php?id=<?php echo $_GET['id']?>&slot=0142', myAJAXCallback3);

}, delay);


        }
    </script>

    

</body>
</html>

