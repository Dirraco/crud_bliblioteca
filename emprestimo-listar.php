<h1>Listar Empréstimo</h1>
<?php
$sql = "SELECT * FROM emprestimo AS e 
INNER JOIN livro AS l
ON e.livro_id_livro = l.id_livro
INNER JOIN usuario AS u
ON e.usuario_id_usuario = u.id_usuario
INNER JOIN funcionario AS f
ON e.funcionario_id_funcionario = f.id_funcionario";

$res = $conn->query($sql);
$qtd = $res->num_rows;

if ($qtd > 0) {
	print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
	print "<table class='table table-bordered table-striped table-hover'>";
	print "<tr>";
	print "<th>Nome do Livro</th>";
    print "<th>Nome do Usuário</th>";
    print "<th>Nome do Atendente</th>";
    print "<th>Data de Emprestimo</th>";
    print "<th>Data de Devolução</th>";
    print "<th>ação</th>";
	print "</tr>";
	while ($row = $res->fetch_object()) {
		print "<tr>";
		print "<td>" . $row->titulo_livro . "</td>";
		print "<td>" . $row->nome_usuario . "</td>";
        print "<td>" . $row->nome_funcionario . "</td>";
        print "<td>" . $row->data_emprestimo . "</td>";
        print "<td>" . $row->data_devolucao . "</td>";
        print "<td>
            <button onclick=\"location.href='?page=emprestimo-editar&livro_id_livro=" . $row->livro_id_livro . "';\" class='botao'>Editar</button>
            <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=emprestimo-salvar&acao=excluir&livro_id_livro=" . $row->livro_id_livro . "';}else{false;}\" class='botao2'>Excluir</button>
        </td>";
    print "</tr>";
	}
	print "</table>";
} else {
	print "Não encontrou resultado";
}
?>