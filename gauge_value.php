<?php 
require('models/Consulta.class.php');
$consulta = new Consultas;
$valor = $consulta->get_PARAMETRO_valor($_GET['id'], $_GET['slot']);

echo (int) ((count($valor)==0)?0:$valor[0][0]);
?>
