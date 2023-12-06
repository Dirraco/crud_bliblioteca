<h1>Editar Atendente</h1>
<?php
	$sql_1 = "SELECT * FROM funcionario WHERE id_funcionario=".$_REQUEST['id_funcionario'];
	$res_1 = $conn->query($sql_1);
	$row_1 = $res_1->fetch_object();
?>
<form action="?page=funcionario-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_funcionario" value="<?php print $row_1->id_funcionario; ?>">
	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="nome_funcionario" value="<?php print $row_1->nome_funcionario; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>cpf</label>
		<input type="number" name="cpf_funcionario" value="<?php print $row_1->cpf_funcionario; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>email</label>
		<input type="email" name="email_funcionario" value="<?php print $row_1->email_funcionario; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>fone</label>
		<input type="number" name="fone_funcionario" value="<?php print $row_1->fone_funcionario; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="botao">Enviar</button>
	</div>
</form>