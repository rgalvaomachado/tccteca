<?php
    include'interface/head/iHead.php';
    include'interface/menu/iMenuFunc.php';
?>
    <div id="usuario">
<?php
	$notas = $_POST["notas"];
	$erro = 0;
	
	if (empty($notas)== True)
	{echo "Favor digitar alguma nota  <br></br> <a href='Func.php'> Voltar </a>"; $erro=1;}
	if ($erro==0)
    {
	$conexao = mysql_connect("localhost", "root" , "" );
	mysql_select_db ("dbcontroletcc");;

	$notas = $_POST["notas"];
	$date = date('Y-m-d');

	$sql  = "INSERT INTO notas VALUES";
	$sql .= "('', '$notas', '$date')";
	$resultado = mysql_query ($sql);
	echo "";
	mysql_close($conexao);
?>
    <br></br>
	<meta http-equiv="refresh" content="0; Func.php">
    
<?php
    }
?>
    </div>