<?php /* Smarty version Smarty-3.1.8, created on 2013-03-28 03:49:39
         compiled from "./templates/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1113264109502291e3264dc3-90467307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb669023950c29719bac9ad0fab891ac18fb23f9' => 
    array (
      0 => './templates/admin.tpl',
      1 => 1364391364,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1113264109502291e3264dc3-90467307',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_502291e32e1f51_98429765',
  'variables' => 
  array (
    'menu' => 0,
    'data' => 0,
    'data1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_502291e32e1f51_98429765')) {function content_502291e32e1f51_98429765($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<h1>Administracion</h1>
<div id='menu'>
	<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

	</div>
<div class='clear'></div>
<h2>Gestion de usuarios</h2>
<?php echo $_smarty_tpl->tpl_vars['data']->value;?>

<br/><br/>
<div class='clear'></div>
<h2>Gestion de parametros</h2>
<?php echo $_smarty_tpl->tpl_vars['data1']->value;?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>