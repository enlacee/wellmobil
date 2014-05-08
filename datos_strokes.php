<?php
header('Content-type: application/json');

require('models/Consulta.class.php');
$consulta = new Consultas;
$limit=(isset($_GET['limit']))?" limit 0,1 ":" limit 0,50";


$param1 = $consulta->get_PARAMETRO_grafico1($_GET['id'], $_GET['slot'],$limit,"DESC");
$respons[0]=array(date('Y-m-d H:i:s'),0.0;)

if(isset($_GET['limit'])){
for($i = 0;$i<count($param1);$i++)
{
	$x = ((strtotime($param1[$i]['fecha']))*1000);
	$y = floatval($param1[$i]['valor']);
	
$respons[$i]=$y;
}
}
else{
$j=0;
for($i = count($param1)-1; $i >=0;$i--)
{
	$x = ((strtotime($param1[$i]['fecha']))*1000);
	$y = floatval($param1[$i]['valor']);
	
$respons[$j]=$y;
$j++;
}
}

echo json_encode($respons);
?>
