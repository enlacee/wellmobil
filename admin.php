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
	$menu.= "<div class='menu'><a href='bases'>Cambiar pozo</a></div>";
}

//Seleccionar los datos
require_once('models/CRUD/preheader.php');
include ('models/CRUD/ajaxCRUD.class.php');

$tblDemo = new ajaxCRUD("Usuarios", "usuarios", "id", "models/CRUD/");
//$tblDemo->omitPrimaryKey();
$tblDemo->displayAs("fldField1", "Field1");
$tblDemo->displayAs("fldField2", "Field2");
//set field fldCheckbox to be a checkbox
$tblDemo->setLimit(10);

$tblDemo1 = new ajaxCRUD("Parametros", "parametros", "id", "models/CRUD/");
//$tblDemo->omitPrimaryKey();
$tblDemo1->displayAs("fldField1", "Field1");
$tblDemo1->displayAs("fldField2", "Field2");
//set field fldCheckbox to be a checkbox
$tblDemo1->setLimit(20);

require('libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->debugging = $debug;
$smarty->caching = $caching;
$smarty->cache_lifetime = $lifetime;
$smarty->assign('menu',$menu);
$smarty->assign( 'data', $tblDemo->showTable());
$smarty->assign( 'data1', $tblDemo1->showTable());
$smarty->display('admin.tpl');
?>