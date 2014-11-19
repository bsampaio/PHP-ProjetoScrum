<?php include "header.php" ?>
<?php include "conexao.php" ?>
<?php include "colaborador-functions.php" ?>
<?php
	$colaboradores = listaColaboradores($connection);

	if(isset($_GET["removido"])):
		if($_GET["removido"]=="true"):
?>
			<p class="alert-success">O colaborador foi removido com sucesso</p>
<?php
		endif;
	endif;
?>
<h1>Lista de Colaboradores</h1>
<br/>
<div class="table-responsive">
    <table class="table table-striped table-condensed">
        <th>Nome</th>
        <th>Email</th>
        <th>Data de Nascimento</th>
        <th>Tipo</th>
        <th>Alterar</th>
        <th>Remover</th>
        <?php
            if(!empty($colaboradores)):
            foreach ($colaboradores as $colaborador) :
        ?>
            <tr>
                <td><?=$colaborador['nome']?></td>
                <td><?=$colaborador['email']?></td>
                <td><input type="date" value="<?=$colaborador['datanascimento']?>" readonly="true"/></td>
                <td><?=$colaborador['tipo_nome']?></td>
                <td>
                    <center>
                            <a class="btn btn-warning" href="edita-colaborador-formulario.php?id=<?=$colaborador['id']?>">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>
                    </center>
                </td>
                <td>
                    <form action="remove-colaborador.php" method="POST">
                        <center>
                            <input type="hidden" name="id" value="<?=$colaborador['id']?>">
                            <button class="btn btn-danger">
                                <span class="glyphicon glyphicon-remove"></span>
                            </button>
                        </center>
                    </form>
                </td>
            </tr>
        <?php
            endforeach;
            endif;
        ?>
    </table>
</div>
<?php include "footer.php" ?>
