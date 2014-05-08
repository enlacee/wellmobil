<?php /* Smarty version Smarty-3.1.8, created on 2012-08-08 10:34:29
         compiled from "./templates/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:712082142502278dbd577f7-09916191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb669023950c29719bac9ad0fab891ac18fb23f9' => 
    array (
      0 => './templates/admin.tpl',
      1 => 1344440064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '712082142502278dbd577f7-09916191',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_502278dbdbae16_16406757',
  'variables' => 
  array (
    'menu' => 0,
    'data' => 0,
    'data1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_502278dbdbae16_16406757')) {function content_502278dbdbae16_16406757($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<h1>Administracion</h1>
<div id='menu'>
	<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

	</div>
<div class='clear'></div>
<h2>Gestion de usuarios</h2>
<?php echo $_smarty_tpl->tpl_vars['data']->value;?>

<br/><br/>
<div class='clear'></div>
<h2>Gestion de parametris</h2>
<?php echo $_smarty_tpl->tpl_vars['data1']->value;?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>