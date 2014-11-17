<?php include "header.php" ?>
<?php include "conexao.php" ?>
<?php include "produtos-functions.php" ?>
<?php
$idProduto = $_POST['id'];

if(removeProduto($connection, $idProduto)):
	header("Location: produto-lista.php?removido=true");
	die();
else:
?>
	<p class="alert-danger">O produto <?=$idProduto?> não pode ser removido!</p>
<?php endif;?>