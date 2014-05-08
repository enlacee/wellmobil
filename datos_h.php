<?php
header('Content-type: application/json');

require('models/Consulta.class.php');
$consulta = new Consultas;
$param1 = $consulta->get_PARAMETRO_grafico1($_GET['id'], $_GET['slot']);

for($i = 0; $i < count($param1); $i ++)
{
	$x = strtotime($param1[$i]['fecha']) * 1000; 
	//$x = strtotime(substr($param1[$i]['fecha'],'0','4')."-".substr($param1[$i]['fecha'],'5','2')."-".substr($param1[$i]['fecha'],'8','2')." ".(substr($param1[$i]['fecha'],'11','2') + 5).":".substr($param1[$i]['fecha'],'14','2').":".substr($param1[$i]['fecha'],'17','2')) * 1000;
	$y = floatval($param1[$i]['valor']);
	$respons[] = array($x, $y);
}

$data = array(
  'chart' => array(
    'renderTo' => 'container'
  ),
   'title' => array(
    'text' => 'Valores historicos'
  ),
  'chart.showLoading()',
  'series' => array(
    array(
		'name'      => 'Valor',
		'data'       => $respons,
		'tooltip'    => array('valueDecimals', '1')
    )
  )
);
echo json_encode($data);
?>