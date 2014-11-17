<?php include "header.php" ?>
<?php include "conexao.php" ?>
<?php include "produtos-functions.php" ?>
<?php

$nome = $_POST['nome'];
$email = $_POST["email"];
$datanascimento = $_POST['datanascimento'];
$tipo_id = $_POST['tipo_id'];


if(insereProduto($connection, $nome, $preco, $descricao, $categoria_id, $usado)){?>
	<p class="text-success"> 
		Produto <?php echo $nome;?> adicionado com sucesso!
		Preço <?php echo $preco;?>!
	</p><br/>
<?php }else{ 
	$msg = mysqli_error($connection);
?>
	<p class="text-danger"> Produto <?php echo $nome;?> não foi adicionado com sucesso!</p><br/>
	<p class="alert-warning"> Causa do erro: <?= $msg;?></p><br/>	
<?php }

?>

<?php include "footer.php" ?>