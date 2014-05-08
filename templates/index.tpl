{include file="header.tpl"}

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
{include file="footer.tpl"}
