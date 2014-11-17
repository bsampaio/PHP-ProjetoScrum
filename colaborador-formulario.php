<?php include "header.php" ?>
<?php include "conexao.php" ?>
<?php include "categorias-functions.php" ?>
<?php 
	$categorias = listaCategorias($connection);
?>
<h1>Formulário de cadastro de colaboradores</h1>
	<form action="adiciona-produto.php" method="POST">
		<table class="table">
			<tr>
				<td>Nome</td>
				<td><input class="form-control" type="text" name="nome"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input class="form-control" type="number" name="email"></td>
			</tr>
			<tr>
				<td>Data de Nascimento</td>
				<td><textarea class="form-control" name="datanascimento"></textarea></td>
			</tr>
			<tr>
				<td>Tipo</td>
				<td>
					<select name="categoria_id" class="form-control">
					<?php foreach ($categorias as $categoria): ?>
						<option value="<?=$categoria["id"]?>">
							<?php echo $categoria["nome"];?>
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