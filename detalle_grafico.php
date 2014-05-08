<?php
session_start();

if(empty($_SESSION['user']['id']))
{
	echo "<script>";
	echo "window.location = 'index';";
	echo "</script>";
}
else
{
	$menu = "<div class='menu'><a href='salir'>Salir</a></div>";
	/*$menu.= "<div class='menu2'><a href='bases'>Cambiar pozo</a></div>";
   $menu.= "<div class='menu2'><a href='gperforacion?id=".$_GET['id']."'>Perforacion</a></div>"; 
	$menu.= "<div class='menu2'><a href='gvolumenes?id=".$_GET['id']."'>Volumenes</a></div>"; 
	$menu.= "<div class='menu2'><a href='gstrokes?id=".$_GET['id']."'>Strokes</a></div>";
	$menu.= "<div class='menu2'><a href='gcromatografia?id=".$_GET['id']."'>Cromatografia</a></div>"; */ 
	if($_SESSION['user']['id'] == 1)
		$menu.= "<div class='menu'><a href='admin'>Administracion</a></div>";
}

if(empty($_GET['id']))
{
	echo "<script>";
	echo "window.location = 'bases';";
	echo "</script>";
}

/**
	* Proyectos
	* @package Proyectos
*/


	
$titulo="<a href='detalle?id=".$_GET['id']."' style='text-decoration:none;color:#90F491;'>Pozo: ".$_GET['id']."</a>";

$titulo_="<a href='detalle?id=".$_GET['id']."' style='text-decoration:none;color:#90F491;'>Ver en Modo Clasico</a>";
require('libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->caching = false;
$smarty->assign('menu',$menu);
$smarty->assign('titulo',$titulo);
$smarty->assign('titulo_',$titulo_);
$smarty->assign('id',$_GET['id']);
$smarty->display('detalle_grafico.tpl');
?>
