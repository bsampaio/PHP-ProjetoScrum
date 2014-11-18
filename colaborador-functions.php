<?php 

function listaColaboradores($connection){
	$colaboradores = array();
	$query = "SELECT c.*, t.nome as tipo_nome FROM 
			 colaboradores c JOIN tipos t
			 	ON c.fk_tipos = t.id ";
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

function removeColaborador($connection, $idColaborador){
	$query = "DELETE FROM colaboradores WHERE colaboradores.id = {$idColaborador};";
	return mysqli_query($connection, $query);
}

function buscaColaborador($connection, $idColaborador){
    $colaboradores = array();
    $query = "SELECT * FROM colaboradores WHERE colaboradores.id = {$idColaborador};";
    $result = mysqli_query($connection, $query);
    return mysqli_fetch_assoc($result);
}

function editaColaborador($connection, $idColaborador, $nome, $email, $datanascimento, $tipo_id){
    $query = "UPDATE colaboradores
                SET nome='{$nome}',
                email='{$email}',
                datanascimento='{$datanascimento}',
                fk_tipos={$tipo_id}
             WHERE colaboradores.id={$idColaborador};";
    return mysqli_query($connection, $query);
}
