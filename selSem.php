<?php 
    include 'interface/head/iHead.php';
    include 'interface/menu/iMenuFunc.php';
?>
<fieldset id="usuario"><legend><h3>Selecione o Semestre/Ano</h3></legend>
    <form enctype="multipart/form-data" method="post" action="relatorioSemestre.php">
    <div id="curso">
            <p><label>Semestre </label>
            <select name="sem">
                <option>Todos</option>
                <option>1 Semestre</option>
                <option>2 Semestre</option>
            </select></p>
            <p><label> Ano </label>
            <select name="ano">
            <?php
            for($i=2016;$i<=2030;$i++){
                echo"<option>$i</option>";
            }
            ?>
            </select></p>
            <input id="botao" type="submit" value="Gerar Relatório"/>
            </select></p>
    </div>
    </form>
</fieldset>