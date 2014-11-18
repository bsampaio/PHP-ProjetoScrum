<?php include "header.php" ?>
<?php include "conexao.php" ?>
<?php include "colaborador-functions.php" ?>
<?php
$idColaborador = $_POST['id'];

if(removeColaborador($connection, $idColaborador)):
	header("Location: colaborador-lista.php?removido=true");
	die();
else:
?>
	<p class="alert-danger">O colaborador <?=$idColaborador?> não pôde ser removido!</p>
<?php endif;?>
