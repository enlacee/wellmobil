<?php /* Smarty version Smarty-3.1.8, created on 2012-08-05 22:49:10
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17196501c07a899bd00-33705216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1344206888,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17196501c07a899bd00-33705216',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_501c07a8add671_61040787',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_501c07a8add671_61040787')) {function content_501c07a8add671_61040787($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

	<img src='images/logo.jpg' />
	<form  method="POST" data-ajax="false" action="index">
		<div class="fieldcontain">
			<label for="login">Usuario</label>
			<input type="text" name="login" id="login" value="" />
		</div>
		<div class="fieldcontain">
			<label for="pass">Password</label>
			<input type="password" name="pass" id="pass" value=""  />
		</div>
		<div class="fieldcontain">
			<input type='submit' id="submit" value='Entrar'/>
		</div>
	</form>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>