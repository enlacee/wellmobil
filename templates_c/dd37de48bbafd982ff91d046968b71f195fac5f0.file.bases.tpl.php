<?php /* Smarty version Smarty-3.1.8, created on 2013-03-31 23:35:46
         compiled from ".\templates\bases.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153255018b25e741f08-70595883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd37de48bbafd982ff91d046968b71f195fac5f0' => 
    array (
      0 => '.\\templates\\bases.tpl',
      1 => 1364391363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153255018b25e741f08-70595883',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5018b25e836c80_20911965',
  'variables' => 
  array (
    'script' => 0,
    'menu' => 0,
    'detalle' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5018b25e836c80_20911965')) {function content_5018b25e836c80_20911965($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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