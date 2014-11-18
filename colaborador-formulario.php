<?php include "header.php" ?>
<?php include "conexao.php" ?>
<?php include "tipos-functions.php" ?>
<?php 
	$tipos = listaTipos($connection);
?>
<h1>Formulário de cadastro de colaboradores</h1>
	<form action="adiciona-colaborador.php" method="POST">
		<table class="table">
			<tr>
				<td>Nome</td>
				<td><input class="form-control" type="text" name="nome"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input class="form-control" type="email" name="email"></td>
			</tr>
			<tr>
				<td>Data de Nascimento</td>
				<td><input class="form-control" type="date" name="datanascimento"></td>
			</tr>
			<tr>
				<td>Tipo</td>
				<td>
					<select name="tipo_id" class="form-control">
					<?php foreach ($tipos as $tipo): ?>
						<option value="<?=$tipo["id"]?>">
							<?php echo $tipo["nome"];?>
						</option>
					<?php endforeach ?>
					</select>
				</td>
			</tr>
			<tr>
				<td><input class="btn btn-primary" type="submit" value="Cadastrar"></td>
			</tr>
		</table>
	</form>
<?php include "footer.php" ?>
