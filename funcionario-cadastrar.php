<h1>Cadastrar Atendente</h1>
<form action="?page=funcionario-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="nome_funcionario" class="form-control">
	</div>
	<div class="mb-3">
		<label>CPF</label>
		<input type="number" name="cpf_funcionario" class="form-control">
	</div>
	<div class="mb-3">
		<label>Email</label>
		<input type="email" name="email_funcionario" class="form-control">
	</div>
	<div class="mb-3">
		<label>Fone</label>
		<input type="number" name="fone_funcionario" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="botao">Enviar</button>
	</div>
</form>