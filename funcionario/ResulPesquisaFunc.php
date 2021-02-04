<?php
	include'interface/menu/iMenuFunc.php';
	include'interface/head/iHead.php';
	
	$pesquisa = $_SESSION['pesquisa'];
	$filtro = $_SESSION['filtro'];
	
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
				<td> Ver			</td>
			</tr>";
	
	$conexao = mysql_connect('localhost', 'root' , '' );
	mysql_select_db ('dbcontroletcc');
	
	$query  = "SELECT * FROM tcc WHERE $filtro";
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
				<td> <a href='tccs/$fetch[9]' target='_blank'> <img src='iconeVisualizar.jpg' align='right' height='20' width='20'> </a> </td>
			</tr>
		";
	};
	echo "</table>";
?>