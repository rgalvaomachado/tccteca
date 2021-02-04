<?php
include 'interface/head/iHead.php';
include 'interface/menu/iMenu.php';
?>
<body>
<div id="login">
    <h1>Controle de Acesso</h1>
	<form action="VerifLogin.php" method="POST" >
		<p><label></label><input type="text" id="nome" size="20" maxlength="30" placeholder="Login" name="login" /></p>
		<p><label></label><input type="password" id="senha" size="20" maxlength="30" placeholder="Senha" name="senha"></p>
		<input id="botao" type="submit" value="Entrar"/>
    </form>
</div>
</body>