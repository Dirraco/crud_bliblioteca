<h1>Cadastrar Categoria</h1>
<form action="?page=categoria-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3 ">
		<label class="text">Nome da Categoria</label>
		<input type="text" name="nome_categoria" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="botao">Enviar</button>
	</div>
</form>