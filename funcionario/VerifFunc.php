<?php
    include'interface/head/iHead.php';
    include'interface/menu/iMenuFunc.php';
?>
<div id="usuario">
	<?php
		$nome = $_POST["nome"];
		$email = $_POST["e-mail"];
		$login = $_POST["login"];
		$senha = $_POST["senha"];
		$erro = 0;
		
		if (empty($nome)== True)
		{echo "Favor digitar o Nome </br>"; $erro=1;}
		if (empty($email)== True)
		{echo "Favor digitar o E-Mail </br>"; $erro=1;}
		if (empty($login)== True)
		{echo "Favor digitar o Login </br>"; $erro=1;}
		if (empty($senha)== True)
		{echo "Favor digitar a Senha <br></br> <a href='CadFunc.php'> Voltar </a>"; $erro=1;}
		if ($erro==0)
		{echo "";
        
        $conexao = mysql_connect("localhost", "root" , "" );
        mysql_select_db ("dbcontroletcc");;

        $nome = $_POST["nome"];
        $email = $_POST["e-mail"];
        $login = $_POST["login"];
        $senha = $_POST["senha"];

        $sql  = "INSERT INTO administrador VALUES";
        $sql .= "('', '$nome', '$email', '$login', '$senha')";
        $resultado = mysql_query ($sql);
        mysql_close($conexao);
        ?>
        <br></br>
		<meta http-equiv="refresh" content="0; CadFunc.php">
    <?php
        }
	?>
</div>