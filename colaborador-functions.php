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
	$query = "INSERT INTO colaboradores (nome, email, datanascimento, fk_tipos)
	VALUES ('{$nome}', '{$email}', '{$datanascimento}', {$tipo_id});";

	return mysqli_query($connection, $query);
}

function removeProduto($connection, $idColaborador){
	$query = "DELETE FROM colaboradores WHERE colaboradores.id = {$idColaborador};";
	return mysqli_query($connection, $query);
}
