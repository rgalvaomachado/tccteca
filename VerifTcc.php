<?php
    include'interface/head/iHead.php';
    include'interface/menu/iMenuFunc.php';
?>
    <div id='usuario'>
<?php        
    $mes = date('m');
    $ano = date('Y');
    if($mes<=6){
        $semestre=1;
    }
    else{
        $semestre=2;
    }
	   
    $ra = $_POST["ra"];
    $aluno = $_POST["aluno"];
    $titulo = $_POST["titulo"];
    $orientador = $_POST["Ori"];
    $palavrachave = $_POST["palavra"];
    $curso = $_POST["Curso"];
	$erro = 0;
	
	$file_tmp = $_FILES["file"]["tmp_name"];
	$file_name = $_FILES["file"]["name"];
	
	move_uploaded_file($file_tmp,"tccs/$file_name");
	
	$arquivo = $file_name;
		
    if (empty($ra)== True)
        {echo "Favor digitar o R.A.</br>"; $erro=1;}
    if (empty($aluno)== True)
		{echo "Favor digitar o nome do Aluno </br>"; $erro=1;}
    if (empty($titulo)== True)
        {echo "Favor digitar o Titulo </br>"; $erro=1;}
    if (empty($orientador)== True)
		{echo "Favor digitar o Orientador </br>"; $erro=1;}
    if (empty($palavrachave)== True)
		{echo "Favor digitar as palavras chave </br>"; $erro=1;}
    if (empty($curso)== True)
		{echo "Favor selecionar o curso </br>"; $erro=1;}
    if (empty($arquivo)== True)
		{echo "Favor selecionar o arquivo </br>"; $erro=1;}
    if ($erro==0){
    echo "";
	$conexao = mysql_connect("localhost", "root" , "" );
	mysql_select_db ("dbcontroletcc");
	
	$sql  = "INSERT INTO tcc VALUES";
	$sql .= "('$id','$ra', '$aluno', '$curso' , '$titulo' , '$ano', '$semestre', '$orientador', '$palavrachave', '$arquivo')";
	$resultado = mysql_query ($sql);
	mysql_close($conexao);
?>
    <br></br>
	<meta http-equiv="refresh" content="0; CadTcc.php">
<?php
    }
?> 
</div>