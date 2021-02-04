<?php 
    include 'interface/head/iHead.php';
    include 'interface/menu/iMenuFunc.php';
?>
<fieldset id="usuario"><legend><h3>Informações do TCC</h3></legend>
    <form enctype="multipart/form-data" method="post" action="VerifTcc.php">
    <p><label>R.A. </label><input type="text" placeholder="R.A." name="ra" maxlength="12"/></p>
    <p><label>Aluno </label><input type="text" placeholder="Nome completo do autor" maxlength="50" name="aluno" /></p>
    <p><label>Titulo do TCC </label><input type="text" placeholder="Titulo do TCC" maxlength="50" name="titulo" /></p>
    <p><label>Palavras chaves </label><input type="text" placeholder="Palavras chaves" maxlength="50" name="palavra" ></p>
    <div id="curso">
        <p><label>Orientador </label>
            <select name="Ori" >
                <?php
    
                $conexao = mysql_connect("localhost", "root" , "" );
	               mysql_select_db ("dbcontroletcc");
	
	           $query  = "SELECT Ori_Txt_Nome FROM orientadores ORDER BY Ori_Txt_Nome asc";
	           $result = mysql_query ($query);
	
	
	           while($fetch = mysql_fetch_row($result)){
                    echo"<option>$fetch[0]</option>";
                }
                ?>
            </select></p>
        <p><label>Curso </label>
            <select name="Curso" >
                <?php
    
                $conexao = mysql_connect("localhost", "root" , "" );
	               mysql_select_db ("dbcontroletcc");
	
	           $query  = "SELECT Curso_Txt_Curso FROM cursos ORDER BY Curso_Txt_Curso asc";
	           $result = mysql_query ($query);
	
	
	           while($fetch = mysql_fetch_row($result)){
                    echo"<option>$fetch[0]</option>";
                }
                ?>
            </select></p>
    </div>
    <p><label>Arquivos </label><input id="file" type="file" name="file"/></p>
    <p><input type="submit" id="botao" value="CADASTRAR"></p>
    </form>
</fieldset>