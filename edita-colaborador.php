<?php include "header.php" ?>
<?php include "conexao.php" ?>
<?php include "colaborador-functions.php" ?>
<?php

$idColaborador = $_POST['idColaborador'];
$nome = $_POST['nome'];
$email = $_POST["email"];
$datanascimento = $_POST['datanascimento'];
$tipo_id = $_POST['tipo_id'];


if(editaColaborador($connection, $idColaborador, $nome, $email, $datanascimento, $tipo_id)){?>
	<p class="text-success">
		Colaborador <?php echo $nome;?> alterado com sucesso!
	</p><br/>
<?php }else{
	$msg = mysqli_error($connection);
?>
	<p class="text-danger"> Colaborador <?php echo $nome;?> não foi alterado com sucesso!</p><br/>
	<p class="alert-warning"> Causa do erro: <?= $msg;?></p><br/>
<?php }

?>

<?php include "footer.php" ?>
