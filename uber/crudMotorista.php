<?php
include 'conexaoBD.php';

function cadastrarMotorista($nome, $cpf){
	connect();
	query("INSERT INTO motorista (nome, cpf) VALUES ('$nome', '$cpf')");
	close();
}

function mostrarMotorista(){
	connect();
	$resultado = query("SELECT * FROM motorista");
	close();

	return $resultado; 
}

function mostrarMotoristaAlterar($codigo){
	connect();
	$resultado = query("SELECT * FROM motorista WHERE codigo=$codigo");
	close();
	return $resultado;
}

function alterarMotorista($codigo, $nome, $cpf){
	connect();
	query("UPDATE motorista SET nome = '$nome', cpf='$cpf' WHERE codigo=$codigo");
	close();
}

function excluirMotorista($codigo){
	connect();
	query("DELETE FROM motorista WHERE codigo=$codigo");
	close();
}

function mostrarMotoristaPesquisar($pesquisa){
	connect();
	$resultado = query("SELECT * FROM motorista WHERE nome LIKE '%$pesquisa%' OR cpf LIKE '%$pesquisa%'");
	close();
	return $resultado;

}


?>