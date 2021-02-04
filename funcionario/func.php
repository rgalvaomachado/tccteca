<?php 
    include 'interface/head/iHead.php';
    include 'interface/menu/iMenuFunc.php';
?>
<body>
<fieldset id="usuario"><legend><h3>Notas</h3></legend>
    <p>
	<form  method="POST" action="VerifNotas.php">
		<p>Notas <input type="text" name="notas">
		<input type="submit" id="botao" value="Gravar"></p>
	</form>
	<form  method="POST" action="excluiNotas.php">
    <div id="curso">
	<p><label>Excluir Nota </label>
            <select name="exclui">
                <?php
    
                $conexao = mysql_connect("localhost", "root" , "" );
	               mysql_select_db ("dbcontroletcc");
	
	           $query  = "SELECT Notas_Int_Id FROM notas ";
	           $result = mysql_query ($query);
	
	
	           while($fetch = mysql_fetch_row($result)){
                    echo"<option>$fetch[0]</option>";
                }
                ?>
            </select>
        <input type="submit" id="botao" value="Excluir"></p>
        </div>
	</form>
	<?php
	
	$conexao = mysql_connect("localhost", "root" , "" );
	mysql_select_db ("dbcontroletcc");
	
	$query  = "SELECT * FROM notas ORDER BY Notas_Int_Id desc";
	$result = mysql_query ($query);
	
	
	while($fetch = mysql_fetch_row($result)){
		$id = $fetch[0];
		$notaa = $fetch[1];
		$dataa = $fetch[2];
		$dataa = implode("/", array_reverse(explode("-", $dataa)));
		
        echo "<p> Nota " . $id . ": ". $notaa . " - ". $dataa . "</p>";
    }
	
	?>
    
</fieldset>
</body>