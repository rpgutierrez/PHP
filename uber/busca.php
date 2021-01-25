<?php
include 'crudMotorista.php';
$pesquisa = $_POST["palavra"];
switch ($pesquisa) {
	case 'tudo':
	$resultado=mostrarMotorista();
	break;
	default:
	$resultado=mostrarMotoristaPesquisar($pesquisa);
	break;
}
if(mysqli_num_rows($resultado)<=0){
	echo 'Nenhum motorista encontrado';
}
else{
	while($resultadoSeparado=mysqli_fetch_assoc($resultado)){
		echo "
		<tr>
		<td>$resultadoSeparado[codigo]</td>
		<td>$resultadoSeparado[nome]</td>
		<td>$resultadoSeparado[cpf]</td>
		<td><a class='btn btn-success'
		href='editarMotorista.php?codigo=$resultadoSeparado[codigo]'>Editar</a></td>
		</tr>
		";
	}
} 
?>