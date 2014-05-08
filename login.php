<?php
/**
	* Proyectos
	* @package Proyectos
*/

// Necesario para las consultas
require('models/Consulta.class.php');
$consulta = new Consultas;
$data = $consulta->get_User($_POST['login'],$_POST['pass']);
if(empty($data))
{
	echo "0";
}
else
{
	echo "1";
}
?>