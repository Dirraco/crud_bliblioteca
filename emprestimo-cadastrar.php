<h1>Cadastrar Empréstimo</h1>
<form action="?page=emprestimo-salvar" method="POST">
    <!-- id livro -->
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>LIVRO</label>
		<select name="livro_id_livro" class="form-control">
			<option>- Escolha -</option>
			<?php
				$sql = "SELECT * FROM livro";
				$res = $conn->query($sql);
				if($res->num_rows > 0){
					while($row = $res->fetch_object()){
						print "<option value='".$row->id_livro."'>".$row->titulo_livro."</option>";
					}
				}else{
					print "<option>Não há resultados</option>";
				}
			?>
		</select>
        <!-- id usuario -->
        <input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>USUARRIO</label>
		<select name="  usuario_id_usuario" class="form-control">
			<option>- Escolha -</option>
			<?php
				$sql = "SELECT * FROM usuario";
				$res = $conn->query($sql);
				if($res->num_rows > 0){
					while($row = $res->fetch_object()){
						print "<option value='".$row->id_usuario."'>".$row->nome_usuario."</option>";
					}
				}else{
					print "<option>Não há resultados</option>";
				}
			?>
		</select>
        <!-- id funcionario -->
        <input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>ATENDENTE</label>
		<select name="funcionario_id_funcionario" class="form-control">
			<option>- Escolha -</option>
			<?php
				$sql = "SELECT * FROM funcionario";
				$res = $conn->query($sql);
				if($res->num_rows > 0){
					while($row = $res->fetch_object()){
						print "<option value='".$row->id_funcionario."'>".$row->nome_funcionario."</option>";
					}
				}else{
					print "<option>Não há resultados</option>";
				}
			?>
		</select>
	</div>
	<div class="mb-3">
		<label>Data de Emprestimo</label>
		<input type="date" name="data_emprestimo" class="form-control">
	</div>
	<div class="mb-3">
		<label>Data de Devolução</label>
		<input type="date" name="data_devolucao" class="form-control">
	</div>
    <div class="mb-3">
		<button type="submit" class="botao">Enviar</button>
	</div>
</form>