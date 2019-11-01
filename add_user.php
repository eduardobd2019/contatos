<?php

require("config.php");

$nome			= strip_tags($_POST['nome']);
$email			= strip_tags($_POST['email']);
$telefone		= strip_tags($_POST['telefone']);

$sql = $pdo->prepare("INSERT INTO contatos (nome, email, telefone) VALUES (:nome, :email, :telefone)");

$sql->bindValue(":nome", $nome, PDO::PARAM_STR);
$sql->bindValue(":email", $email, PDO::PARAM_STR);
$sql->bindValue(":telefone", $telefone, PDO::PARAM_STR);

$sql->execute();
if($sql){
	echo "Success!";
} 

?>
