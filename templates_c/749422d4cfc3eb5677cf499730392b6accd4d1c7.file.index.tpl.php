<?php /* Smarty version Smarty-3.1.8, created on 2013-03-31 23:32:00
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100645018b24671e473-99502457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1364391364,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100645018b24671e473-99502457',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5018b246804312_60270927',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5018b246804312_60270927')) {function content_5018b246804312_60270927($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div id='login'>
	<img src='images/logo.jpg' />
	<form  method="POST" action="index">
		<div class="fieldcontain">
			<label for="login">Usuario</label>
			<input type="text" name="login" id="login" value=""  class='input'/>
		</div>
		<div class="fieldcontain">
			<label for="pass">Password</label>
			<input type="password" name="pass" id="pass" value=""  class='input'/>
		</div>
		<div class="fieldcontain">
			<input type='submit' id="submit" value='Entrar' class='button'/>
		</div>
	</form>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>