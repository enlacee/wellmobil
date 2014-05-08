<?php /* Smarty version Smarty-3.1.8, created on 2013-04-01 10:23:04
         compiled from "./templates/bases.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21060044305021b13ab1f9e8-45722982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bbb087b2a1056552edd857ea648f6ceb8fd8462' => 
    array (
      0 => './templates/bases.tpl',
      1 => 1364391364,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21060044305021b13ab1f9e8-45722982',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5021b13ab7fed1_08046672',
  'variables' => 
  array (
    'script' => 0,
    'menu' => 0,
    'detalle' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5021b13ab7fed1_08046672')) {function content_5021b13ab7fed1_08046672($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->tpl_vars['script']->value;?>

	<h1>Lista de pozos</h1>
	
	<div id='menu'>
	<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

	</div>
	<div class='clear'></div>
	<ul id='bases'>
		<?php echo $_smarty_tpl->tpl_vars['detalle']->value;?>

	</ul> 

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>