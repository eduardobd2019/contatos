<?php
include_once 'conexao.php';
$conexao = new Conexao();
$smtp = $conexao->conn->prepare("SELECT * FROM contatos");
$smtp->execute();
$dados = [];
//CADA REPETIÇÃO BUSCARA UM ITEM DO BANCO Enquanto tiver dados
while ($linha = $smtp->fetch(PDO::FETCH_OBJ)) {
	$dados[] = $linha;
}
echo json_encode($dados);   // Já converte para o formato JSON usado no Aplicativo
?>
