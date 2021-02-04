<?php
	include 'interface/head/iHead.php';
    include 'interface/menu/iMenuFunc.php';
	
?>
	<a href='#' onclick="window.print();">
		<img src="iconeImpressora.png" align='right' height="50" width="50">
	</a>
<?php	
	
	$orientador = $_POST["ori"];
	
	echo "<table id='relatorio'>
			<tr id='topo' >
				<td> ID 			</td>
				<td> RA   			</td>
				<td> Autor			</td>
				<td> Titulo			</td>
				<td> Palavras Chave	</td>
				<td> Orientador		</td>
				<td> Curso			</td>
				<td> Semestre		</td>
				<td> Ano			</td>
			</tr>";
	
	$conexao = mysql_connect('localhost', 'root' , '' );
	mysql_select_db ('dbcontroletcc');
	
	$query  = "SELECT * FROM tcc WHERE Tcc_Txt_Orientador= '$orientador' ";
	$result = mysql_query ($query);
	
	while($fetch = mysql_fetch_row($result)){
		echo "
			<tr>
				<td> $fetch[0]</td>
				<td> $fetch[1] </td>
				<td> $fetch[2] </td>
				<td> $fetch[4] </td>
				<td> $fetch[8] </td>
				<td> $fetch[7] </td>
				<td> $fetch[3] </td>
				<td> $fetch[6] </td>
				<td> $fetch[5] </td>
			</tr>
		";
	};
	echo "</table>";
?>