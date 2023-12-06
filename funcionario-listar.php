<h1>Listar Atendente</h1>
<?php
$sql = "SELECT * FROM funcionario";
$res = $conn->query($sql);
$qtd = $res->num_rows;

if ($qtd > 0) {
	print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
	print "<table class='table table-bordered table-striped table-hover'>";
	print "<tr>";
	print "<th>#</th>";
	print "<th>Nome do funcionario</th>";
    print "<th>CPF</th>";
    print "<th>E-mail</th>";
    print "<th>Telefone</th>";
	print "<th>Ações</th>";
	print "</tr>";
	while ($row = $res->fetch_object()) {
		print "<tr>";
		print "<td>" . $row->id_funcionario . "</td>";
		print "<td>" . $row->nome_funcionario . "</td>";
        print "<td>" . $row->cpf_funcionario . "</td>";
        print "<td>" . $row->email_funcionario . "</td>";
        print "<td>" . $row->fone_funcionario . "</td>";
		print "<td>
			<button onclick=\"location.href='?page=funcionario-editar&id_funcionario=" . $row->id_funcionario . "';\" class='botao'>Editar</button>
			<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=funcionario-salvar&acao=excluir&id_funcionario=" . $row->id_funcionario . "';}else{false;}\" class='botao2'>Excluir</button>
		</td>";
		print "</tr>";
	}
	print "</table>";
} else {
	print "Não encontrou resultado";
}
?>
