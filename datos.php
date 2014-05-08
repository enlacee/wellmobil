<?php 
// Set the JSON header
header("Content-type: text/json");

//date_default_timezone_set('UTC'); 

require('models/Consulta.class.php');
$consulta = new Consultas;
$param1 = $consulta->get_PARAMETRO_grafico($_GET['bd'], $_GET['id']);

// The x value is the current JavaScript time, which is the Unix time multiplied by 1000.
//$x = time() * 1000;
//$x= (mktime(substr($param1[0]['fecha'],'11','2'), substr($param1[0]['fecha'],'14','2'), substr($param1[0]['fecha'],'17','2'), substr($param1[0]['fecha'],'8','2'), substr($param1[0]['fecha'],'5','2'), substr($param1[0]['fecha'],'0','4')) * 1000);
//$x = time()  * 1000;


//$x= mktime(substr($param1[0]['fecha'],'11','2'), substr($param1[0]['fecha'],'14','2'), substr($param1[0]['fecha'],'17','2'), substr($param1[0]['fecha'],'8','2'), substr($param1[0]['fecha'],'5','2'), substr($param1[0]['fecha'],'0','4')) * 1000;
//$utc_str = gmdate("M d Y H:i:s", time());
 
//$x = strtotime(substr($param1[0]['fecha'],'0','4')."-".substr($param1[0]['fecha'],'5','2')."-".substr($param1[0]['fecha'],'8','2')." ".(substr($param1[0]['fecha'],'11','2') + 5).":".substr($param1[0]['fecha'],'14','2').":".substr($param1[0]['fecha'],'17','2')) * 1000;

$x = ((strtotime($param1[0]['fecha']) * 1000) + (3600000 * 5));
  
// The y value is a random number
$y = (int)($param1[0]['valor']);

// Create a PHP array and echo it as JSON
$ret = array($x, $y);
echo json_encode($ret);
?>