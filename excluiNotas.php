<?php
    include'interface/head/iHead.php';
    include'interface/menu/iMenuFunc.php';
?>
    <div id="usuario">
<?php
	$exclui = $_POST["exclui"];
	
	if (empty($notas)== True)
	{echo "Favor digitar alguma nota  <br></br> <a href='Func.php'> Voltar </a>"; $erro=1;}

	$conexao = mysql_connect("localhost", "root" , "" );
	mysql_select_db ("dbcontroletcc");;
	
	$sql  = "DELETE FROM notas WHERE Notas_Int_Id = '$exclui' ";
    $resultado = mysql_query ($sql);
	mysql_close($conexao);
	
?>
    <br></br>
	<meta http-equiv="refresh" content="0; Func.php">

    </div>