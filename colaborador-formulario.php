<?php include "header.php" ?>
<?php include "conexao.php" ?>
<?php include "tipos-functions.php" ?>
<?php 
	$tipos = listaTipos($connection);
?>
<h1>Formulário de cadastro de colaboradores</h1>
<br/>
<div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
<div class="row">
    <form role="form" action="adiciona-colaborador.php" method="POST">
        <div class="form-group">
            <div class="input-group">
                <input class="form-control" type="text" name="nome" placeholder="Nome" required>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-asterisk">
                    </span>
                </span>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <input class="form-control" type="email" name="email" placeholder="E-mail" required>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-asterisk">
                    </span>
                </span>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <input class="form-control" type="date" name="datanascimento" required>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-asterisk">
                    </span>
                </span>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <select class="form-control" name="tipo_id" required>
                    <?php foreach ($tipos as $tipo): ?>
                        <option value="<?=$tipo["id"]?>">
                            <?php echo $tipo["nome"];?>
                        </option>
                    <?php endforeach ?>
                </select>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-asterisk">
                    </span>
                </span>
            </div>
        </div>
        <input class="btn btn-primary btn-lg btn-block" type="submit" value="Cadastrar">
    </form>
</div>
</div>
<?php include "footer.php" ?>
