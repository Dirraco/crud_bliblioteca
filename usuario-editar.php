<h1>Editar Usuário</h1>
<?php
	$sql_1 = "SELECT * FROM usuario WHERE id_usuario=".$_REQUEST['id_usuario'];
	$res_1 = $conn->query($sql_1);
	$row_1 = $res_1->fetch_object();
?>
<form action="?page=usuario-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_usuario" value="<?php print $row_1->id_usuario; ?>">
	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="nome_usuario" value="<?php print $row_1->nome_usuario; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>CPF</label>
		<input type="number" name="cpf_usuario" value="<?php print $row_1->cpf_usuario; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Email</label>
		<input type="email" name="email_usuario" value="<?php print $row_1->email_usuario; ?>" class="form-control">
	</div>
    <div class="mb-3">
		<label>Data de Nascimento</label>
		<input type="number" name="data_nasc_usuario" value="<?php print $row_1->data_nasc_usuario; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Fone</label>
		<input type="number" name="fone_usuario" value="<?php print $row_1->fone_usuario; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="botao">Enviar</button>
	</div>
</form>