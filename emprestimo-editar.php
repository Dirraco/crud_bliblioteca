<h1>Editar Empréstimo</h1>
<?php
	$sql_1 = "SELECT * FROM emprestimo WHERE livro_id_livro=".$_REQUEST['livro_id_livro'];
	$res_1 = $conn->query($sql_1);
	$row_1 = $res_1->fetch_object();
?>
<form action="?page=emprestimo-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="livro_id_livro" value="<?php print $row_1->livro_id_livro; ?>">
	<div class="mb-3">
		<label>Data de Emprestimo</label>
		<input type="date" name="data_emprestimo" value="<?php print $row_1->data_emprestimo; ?>" class="form-control">
	</div>
    <div class="mb-3">
		<label>Data de Devolução</label>
		<input type="date" name="data_devolucao" value="<?php print $row_1->data_devolucao; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="botao">Enviar</button>
	</div>
</form>