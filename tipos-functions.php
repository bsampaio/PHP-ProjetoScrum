<?php 

function listaCategorias($conexao){
	$categorias = array();

	$query = "SELECT * FROM tipos;";
	$resultado = mysqli_query($conexao, $query);
	while($categoria = mysqli_fetch_assoc($resultado)){
		array_push($tipos, $tipo);
	}
	
	return $tipos;
}

