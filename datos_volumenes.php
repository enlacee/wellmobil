<?php
header('Content-type: application/json');

require('models/Consulta.class.php');
$consulta = new Consultas;
$limit=(isset($_GET['limit']))?" limit 0,1 ":" limit 0,50";


$param1 = $consulta->get_PARAMETRO_grafico1($_GET['id'], $_GET['slot'],$limit,"DESC");
$respons[0]=0.0;

if(isset($_GET['limit'])){
for($i = 0;$i<count($param1);$i++)
{
	$categoria[]=$param1[$i]['fecha'];
	$y = floatval($param1[$i]['valor']);
	
$respons[$i]=$y;
}
}
else{
$j=0;
for($i = count($param1)-1; $i >=0;$i--)
{
	$categoria[]=$param1[$i]['fecha'];
	$y = floatval($param1[$i]['valor']);
	
$respons[$j]=$y;
$j++;
}
}

$_SESSION['CATEGORIA']=$categoria;

echo json_encode($respons);
?>
