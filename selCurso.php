<?php 
    include 'interface/head/iHead.php';
    include 'interface/menu/iMenuFunc.php';
?>
<fieldset id="usuario"><legend><h3>Selecione o Curso</h3></legend>
    <form enctype="multipart/form-data" method="post" action="relatorioCurso.php">
    <div id="curso">
        <p><label>Curso </label>
            <select name="curso" >
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
            <input id="botao" type="submit" value="Gerar Relatório"/>
            </select></p>
    </div>
    </form>
</fieldset>