<?php
    include'interface/menu/iMenu.php';
    include'interface/head/iHead.php';

    echo"<div id='usuario'>";
	$login = $_POST["login"];
	$senha = $_POST["senha"];
	$erro = 0;
	
	if (empty($login)== True)
	{echo "Digite o Login: "; $erro=1;}
	
	if (empty($senha)== True)
	{echo "Digite a Senha: "; $erro=1;}

	if ($erro==0)
	{
		$conexao = mysql_connect("localhost", "root" , "" );
		mysql_select_db ("dbcontroletcc");

		$query  = "SELECT Adm_Txt_Senha FROM administrador WHERE Adm_Txt_Usuario = '$login'";
        $result = mysql_query ($query);
			
        while($fetch = mysql_fetch_row($result)){		
            if ($fetch[0] != $senha)
            {echo "Usuário ou senha incorreto";}
            if($senha == $fetch[0])
            {header("Location: Func.php");}
        }
    }
    echo" <a href='login.php'> Voltar </a> </div>";   
?>