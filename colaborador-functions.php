<?php 

function listaColaboradores($connection){
	$colaboradores = array();
	$query = "SELECT c.*, t.nome as tipo_nome FROM 
			 colaboradores p JOIN tipos t 
			 	ON c.tipo_id = t.id ";
	$result = mysqli_query($connection,$query);
	while($colaborador = mysqli_fetch_assoc($result)){
		array_push($colaboradores,$colaborador);
	}	
	return $colaboradores;
}

function insereColaborador($connection, $nome, $email, $datanascimento, $tipo_id){
	$query = "INSERT INTO produtos (nome, email, datanascimento, tipo_id) 
	VALUES ('{$nome}', {$email}, '{$datanascimento}', {$tipo_id});";
	return mysqli_query($connection, $query);
}

function removeProduto($connection, $idProduto){
	$query = "DELETE FROM produtos WHERE produtos.id = {$idProduto};";
	return mysqli_query($connection, $query);
}