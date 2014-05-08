<?php /* Smarty version Smarty-3.1.8, created on 2012-08-03 17:31:46
         compiled from ".\templates\bases.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32195501990d358fc95-48793706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd37de48bbafd982ff91d046968b71f195fac5f0' => 
    array (
      0 => '.\\templates\\bases.tpl',
      1 => 1344014396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32195501990d358fc95-48793706',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_501990d36fba30_64189176',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_501990d36fba30_64189176')) {function content_501990d36fba30_64189176($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

		
<div data-role="page" id="inicio">	
	<div data-role="header" data-theme='b'>
		<h1>Bases de datos</h1>
		<a href="../m.wellmobil/" data-icon="delete"  class="ui-btn-left" data-inline="true" data-iconpos="notext">Cerrar</a>
	</div>
	
	<div data-role="content">
		<?php echo Smarty_Internal_Nocache_Insert::compile ('insert_Detalle',array(), $_smarty_tpl, 'null');?>

	</div> 
	
	<div data-role="footer">
		<h1>Propiedad de  Alberto Salomon Ariza <br/> Celular +(0051) 970919308<br/>Email : online@wellmobil.net<br/>Lima - Peru</h1>
	</div>
</div> 

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>