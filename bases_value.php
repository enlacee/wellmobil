<?php 
session_start();

if(empty($_SESSION['user']['id']))
{
	echo "<script>";
	echo "window.location = 'index';";
	echo "</script>";
}

require('models/Consulta.class.php');
$consulta = new Consultas;

$rop = $consulta->get_ROP($_GET['id']);
$dep = $consulta->get_DEP($_GET['id']);
			
if(empty($rop[0]['valor'])) $rop[0]['valor'] = 'N/A';
if(empty($dep[0]['valor'])) $dep[0]['valor'] = 'N/A';

echo '<strong>ROP</strong>: '.$rop[0]['valor'].' ft/hR<br/>
	<strong>DEPTH</strong>: '.$dep[0]['valor'].' feet</a></li>';
?>