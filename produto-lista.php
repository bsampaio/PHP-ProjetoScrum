<?php include "header.php" ?>
<?php include "conexao.php" ?>
<?php include "produtos-functions.php" ?>
<?php 
	$produtos = listaProdutos($connection);

	if(isset($_GET["removido"])):
		if($_GET["removido"]=="true"):
?>
			<p class="alert-success">O produto foi removido com sucesso</p>
<?php
		endif;
	endif;
?>
<table class="table table-striped table-bordered">
	<?php
		foreach ($produtos as $produto) :
	?>
		<tr>
			<td><?=$produto['nome']?></td>
			<td><?=$produto['preco']?></td>
			<?php if (strlen($produto['descricao']) < 40): ?>
				<td><?=$produto['descricao']?>
			<?php else: ?>
				<td><?=substr($produto['descricao'],0,40) . "...";?></td>
			<?php endif ?>
			<td><?=$produto['categoria_nome']?></td>
			<td>
				<?php if($produto['usado']):?>
					<input name="usado" type="checkbox" id="usado" value="<?=$produto['usado']?>"
					 onclick="this.checked=true;" checked="checked">
				<?php else: ?>
					<input name="usado" type="checkbox" id="usado" value="<?=$produto['usado']?>"
					 onclick="this.checked=false;">
				<?php endif ?>
			</td>
			<td>
				<form action="remove-produto.php" method="POST"> 
					<center>
						<input type="hidden" name="id" value="<?=$produto['id']?>">
						<button class="btn btn-danger">
							<span class="glyphicon glyphicon-remove"></span>
						</button>
					</center>
				</form>
			</td>
		</tr>
	<?php
		endforeach
	?>
</table>
<?php include "footer.php" ?>