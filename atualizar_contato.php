<?php

include_once('conexao.php');

$conexao = new Conexao();

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['telefone'];


$smtp = $conexao->conn->prepare('UPDATE usuarios SET nome = :nome, email = :email, senha = :senha WHERE id = :id');

$smtp->execute(array(
	'nome' => $nome,
	'email' => $email,
	'senha' => $telefone,
	'id' => $id )
	
);    

 //Previne que códigos maliciosos SQL possam apagar dados do banco.

if ($smtp){

	echo"Atualizado com Sucesso!";

}else{
	
	echo"Error";
}

?>
