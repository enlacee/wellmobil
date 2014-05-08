<html>
<head>
    
    
    <script src="libs/rgraph/RGraph.common.core.js" ></script>
<script src="libs/rgraph/RGraph.common.dynamic.js" ></script>
<script src="libs/rgraph/RGraph.common.key.js" ></script>
 

      <script src="libs/rgraph/RGraph.hprogress.js" ></script>
    <!--[if lt IE 9]><script src="libs/rgraph/excanvas.js"></script><![endif]-->
    
    
    <style>body{color:#90F491;font-size:12px;}table{ float:left;}iframe{border:none;}</style>
</head>
<body>

    
<table >


<tr>
<td style="background:#FFF;">
    <canvas id="cvs_td" width="310" height="130">[No canvas support]</canvas>
</td>
</tr>
<tr>

<td style="background:#FFF;">
    <canvas id="cvs_bd" width="310" height="130">[No canvas support]</canvas>
</td></tr><tr>
<td style="background:#FFF;">
    <canvas id="cvs_b" width="310" height="130">[No canvas support]</canvas>
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
function CrearBarra(cvs,valor,limite,titulo,color){
Limpiar(cvs);
texto=titulo+" ("+valor+")";
new RGraph.HProgress(cvs,valor, limite)
                .Set('colors', [color])
                .Set('key', [texto])
                .Set('key.colors', [color])
                .Set('tooltips', [texto])
                .Set('tickmarks.zerostart', true)
                .Set('bevel', true)
                .Draw();

            
                        
}
var delay = 1500;



            function myAJAXCallback()
            {
                /**
                * The responseText is actually a comma separated list of numbers, but converting it to a number with parseInt()
                * will change it so that it's just the first number
                */
                var data = parseFloat(this.responseText);
                
               CrearBarra('cvs_td',data,100,"SPM1",'#77933E');
                
                
                
                // Make another AJAX call after the delay (which is in milliseconds)
                setTimeout(function () {RGraph.AJAX('gauge_value.php?id=<?php echo $_GET['id']?>&slot=0124', myAJAXCallback);}, delay);
            }
function myAJAXCallback2()
            {
                /**
                * The responseText is actually a comma separated list of numbers, but converting it to a number with parseInt()
                * will change it so that it's just the first number
                */
                var data = parseFloat(this.responseText);
                
             
                CrearBarra('cvs_bd',data,100,"SPM2",'#01FFF1');
                
                
                // Make another AJAX call after the delay (which is in milliseconds)
                setTimeout(function () {RGraph.AJAX('gauge_value.php?id=<?php echo $_GET['id']?>&slot=0123', myAJAXCallback2);}, delay);
            }
function myAJAXCallback3()
            {
                /**
                * The responseText is actually a comma separated list of numbers, but converting it to a number with parseInt()
                * will change it so that it's just the first number
                */
                var data = parseFloat(this.responseText);
                
               
                CrearBarra('cvs_b',data,100,"SPM3",'#7131A1');
                
                
                // Make another AJAX call after the delay (which is in milliseconds)
                setTimeout(function () {RGraph.AJAX('gauge_value.php?id=<?php echo $_GET['id']?>&slot=0125', myAJAXCallback3);}, delay);
            }




            /**
            * Make the AJAX call every so often (contolled by the delay variable)
            */
  setTimeout(function () {
RGraph.AJAX('gauge_value.php?id=<?php echo $_GET['id']?>&slot=0124', myAJAXCallback);
RGraph.AJAX('gauge_value.php?id=<?php echo $_GET['id']?>&slot=0123', myAJAXCallback2);
RGraph.AJAX('gauge_value.php?id=<?php echo $_GET['id']?>&slot=0125', myAJAXCallback3);

}, delay);


        }
    </script>

    

</body>
</html>

