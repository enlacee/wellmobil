<?php 
require('models/Consulta.class.php');
$consulta = new Consultas;
$valor = $consulta->get_PARAMETRO_valor($_GET['id'],"0110");
$Total_Depth=$valor[0][0];
$valor = $consulta->get_PARAMETRO_valor($_GET['id'],"0108");
$Bith_Depth=$valor[0][0];
/*names = ['0111', '0108','0110', '0113','0116','0114','0120','0118'],
		names2 = ['TVD', 'BITH DEPTH', 'TOTAL DEPTH','ROP','WOB','HOOK LOAD','RPM','TORQUE']*/

$valor = $consulta->get_PARAMETRO_valor($_GET['id'],"0118");
$Torque=$valor[0][0];
$valor = $consulta->get_PARAMETRO_valor($_GET['id'],"0114");
$Hook_Load=$valor[0][0];
$valor = $consulta->get_PARAMETRO_valor($_GET['id'],"0121");
$Presion=$valor[0][0];
$valor = $consulta->get_PARAMETRO_valor($_GET['id'],"0113");
$ROP=$valor[0][0];
$valor = $consulta->get_PARAMETRO_valor($_GET['id'],"0116");
$WOB=$valor[0][0];
$valor = $consulta->get_PARAMETRO_valor($_GET['id'],"0120");
$RPM=$valor[0][0];

$Diferencia=($Total_Depth-$Bith_Depth);

$esViaje=($Diferencia>=100&&$Hook_Load>0)?true:false;
$Perforando=($Bith_Depth==$Total_Depth)?true:false;
$Conexion=(($Hook_Load>0&&($Torque==0&&$Presion==0&&$ROP==0&&$WOB==0&&$RPM==0)))?true:false;
$Repasando=($WOB==0&&($Torque>0&&$Presion<0&&$ROP<0&&$Hook_Load>0&&$RPM>0)&&$Diferencia>0)?true:false;
//$Sleep=()?true:false;
echo ($Perforando)?"PERFORANDO":(($esViaje)?"VIAJE":(($Conexion)?"CONEXION":(($Repasando)?"REPASANDO":"&nbsp;")))




?>
