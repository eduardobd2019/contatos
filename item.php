<?php

include_once('Conexao.php');

$conexao = new Conexao();
$id = $_GET['id'];

$stmt = $conexao->conn->prepare('SELECT * FROM usuarios WHERE id = :id');
$stmt->execute(array('id' => $id));
$dados = [];

//CADA REPETIÇÃO BUSCARA UM ITEM DO BANCO Enquanto tiver dados
while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)){
	$dados[] = $linha;

}

if (count($dados) == 1){
	echo json_encode($dados[0]);   // Já converte para o formato JSON usado no Aplicativo


}else{
	echo "item invalido!";
}



?>
