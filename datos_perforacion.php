<?php
header('Content-type: application/json');

require('models/Consulta.class.php');
$consulta = new Consultas;
$limit=(isset($_GET['limit']))?" limit 0,1 ":"";
$order=(isset($_GET['order']))?$_GET['order']:"ASC";
$param1 = $consulta->get_PARAMETRO_grafico1($_GET['id'], $_GET['slot'],$limit,$order);
$respons[0]=array((strtotime(date('Y-m-d H:i:s')) * 1000),0.0);

for($i = 0; $i < count($param1); $i ++)
{
	$x = ((strtotime($param1[$i]['fecha'])))*1000;
//$x=strtotime(date('Y-m-d H:i:s'))*1000;
	//$x = strtotime(substr($param1[$i]['fecha'],'0','4')."-".substr($param1[$i]['fecha'],'5','2')."-".substr($param1[$i]['fecha'],'8','2')." ".(substr($param1[$i]['fecha'],'11','2') + 5).":".substr($param1[$i]['fecha'],'14','2').":".substr($param1[$i]['fecha'],'17','2')) * 1000;
	$y = floatval($param1[$i]['valor']);
	$respons[$i] = array($x, $y);
}

echo json_encode($respons);
?>
