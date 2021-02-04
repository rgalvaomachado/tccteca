<?php 
    include 'interface/head/iHead.php';
    include 'interface/menu/iMenuFunc.php';
?>
<fieldset id="usuario"><legend>INFORMAÇÕES DO FUNCIONARIO</legend>
	<form  method="POST" action="VerifFunc.php">
		<p><label>Nome </label><input type="text" placeholder="Nome Completo" name="nome" maxlength="50"/></p>
		<p><label>E-mail </label><input type="text" placeholder="E-mail" name="e-mail" maxlength="50"/></p>
		<p><label>Login </label><input type="text" placeholder="Login" name="login" maxlength="50"/></p>
		<p><label>Senha </label><input type="password" placeholder="Senha" name="senha" maxlength="12"></p>
		<p><input type="submit" id="botao" value="CADASTRAR"></p>
	</form>
</fieldset>