<?php 
    include 'interface/head/iHead.php';
    include 'interface/menu/iMenuFunc.php';
?>
<fieldset id="usuario"><legend><h3>Selecione o Orientador</h3></legend>
    <form enctype="multipart/form-data" method="post" action="relatorioOrientador.php">
    <div id="curso">
        <p><label>Orientador </label>
            <select name="ori" >
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
            <input id="botao" type="submit" value="Gerar Relatório"/>
            </select></p>
    </div>
    </form>
</fieldset>