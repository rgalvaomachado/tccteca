<div id="pesquisa">
    <h1>Controle de TCC</h1>
	<form method="post" action="VerifPesquisaFunc.php">
    <input id="buscar" type="text" placeholder="pesquise aqui" name="pesquisa"/>
    <br>
    <label id="selecao">Filtrar:</label>
    <select id="selecao" name="filtro">
        <option>Todos</option>
        <option>ID</option>
		<option>R.A.</option>
        <option>Nome do Autor</option>
        <option>Titulo</option>
        <option>Orientador</option>
        <option>Palavras Chaves</option>
        <option>Curso</option>
        <option>Semestre</option>
        <option>Ano</option>
    </select>
    <br>
    <input id="botao" type="submit" value="Pesquisar !">
	</form>
</div>
</body>