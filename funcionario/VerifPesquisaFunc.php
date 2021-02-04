<?php
    include'interface/head/iHead.php';
	session_start();
	
	$pesquisa = $_POST["pesquisa"];
	$filtro = $_POST["filtro"];
	$erro = 0;
	
	if ($filtro == "Todos")
	{$filtro = "Tcc_Int_Id = '$pesquisa' OR 
				Tcc_Int_Ra = '$pesquisa' OR 
				Tcc_Txt_Nome = '$pesquisa' OR 
				Tcc_Txt_Titulo = '$pesquisa' OR 
				Tcc_Txt_Orientador = '$pesquisa' OR 
				Tcc_Txt_PalavraChave = '$pesquisa' OR 
				Tcc_Txt_Curso = '$pesquisa' OR 
				Tcc_Int_Semestre = '$pesquisa' OR 
				Tcc_Year_Ano = '$pesquisa' ";}
	if ($filtro == "ID")
	{$filtro = "Tcc_Int_Id = '$pesquisa'";}
	if ($filtro == "R.A.")
	{$filtro = "Tcc_Int_Ra = '$pesquisa'";}
	if ($filtro == "Nome do Autor")
	{$filtro = "Tcc_Txt_Nome = '$pesquisa'";}
	if ($filtro == "Titulo")
	{$filtro = "Tcc_Txt_Titulo = '$pesquisa'";}
	if ($filtro == "Orientador")
	{$filtro = "Tcc_Txt_Orientador = '$pesquisa'";}
	if ($filtro == "Palavras Chaves")
	{$filtro = "Tcc_Txt_PalavraChave = '$pesquisa'";}
	if ($filtro == "Curso")
	{$filtro = "Tcc_Txt_Curso = '$pesquisa'";}
	if ($filtro == "Semestre")
	{$filtro = "Tcc_Int_Semestre = '$pesquisa'";}
	if ($filtro == "Ano")
	{$filtro = "Tcc_Year_Ano = '$pesquisa'";}
	
	if (empty($pesquisa)== True)
	{echo "Pesquisa algo"; $erro=1;}
	if (empty($filtro)== True)
	{echo "Filtre Algo"; $erro=1;}
	if ($erro==0){

	$_SESSION['pesquisa'] = $pesquisa;
	$_SESSION['filtro'] = $filtro;
	
	include'ResulPesquisaFunc.php';
	}
?>