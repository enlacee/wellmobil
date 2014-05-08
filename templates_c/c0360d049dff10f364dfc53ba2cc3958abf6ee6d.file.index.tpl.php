<?php /* Smarty version Smarty-3.1.8, created on 2014-01-11 17:14:29
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16379695255021b122d86e68-95233767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1389475982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16379695255021b122d86e68-95233767',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5021b122dd4492_07481097',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5021b122dd4492_07481097')) {function content_5021b122dd4492_07481097($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<link rel="stylesheet" type="text/css" href="bootstrap.css">
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
			<input type='submit' id="submit" value='Entrar' class='btn btn-success'/>
		</div>
	</form>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>