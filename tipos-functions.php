<?php 

function listaTipos($conexao){
	$tipos = array();

	$query = "SELECT * FROM tipos;";
	$resultado = mysqli_query($conexao, $query);
	while($tipo = mysqli_fetch_assoc($resultado)){
		array_push($tipos, $tipo);
	}
	
	return $tipos;
}

