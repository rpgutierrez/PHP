<?php
include 'crudMotorista.php';
$opcao = $_POST["opcao"];

switch ($opcao) {
	case 'cadastrar':
	$nome = $_POST["nome"];
	$cpf = $_POST["cpf"];
	cadastrarMotorista($nome, $cpf);
	header("Location: cadastrarMotorista.php");
	break;
	
	case 'alterar':
	alterarMotorista($_POST["codigo"], $_POST["nome"], $_POST["cpf"]);
	header("Location: mostrarMotorista.php");
	break;

	case 'excluir':
	excluirMotorista($_POST["codigo"]);
	header("Location: mostrarMotorista.php");
}

?>