<?php

include_once('conexao.php');

$conexao = new Conexao();
$id = $_GET['id'];



$smtp = $conexao->conn->prepare('DELETE FROM contatos WHERE id = :id');
$smtp->execute(array('id' => $id));    

 //Previne que códigos maliciosos SQL possam apagar dados do banco.

if ($smtp){
	echo"Excluído com Sucesso!";
}else{
	echo"Item inválido";
}
?>
