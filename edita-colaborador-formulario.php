<?php include "header.php" ?>
<?php include "conexao.php" ?>
<?php include "tipos-functions.php" ?>
<?php include "colaborador-functions.php" ?>
<?php
    $tipos = listaTipos($connection);

    $idColaborador = $_GET['id'];
    $colaborador = buscaColaborador($connection, $idColaborador);
    echo "Colaborador:".$colaborador['nome'];
?>
<h1>Formulário de cadastro de colaboradores</h1>
<br/>
<div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
<div class="row">
    <form role="form" action="edita-colaborador.php" method="POST">
        <!-- Form group responsável pelo NOME do Colaborador -->
        <input type="hidden" name="idColaborador" id="idColaborador" value="<?=$idColaborador?>"/>
        <!-- Form group responsável pelo NOME do Colaborador -->
        <div class="form-group">
            <div class="input-group">
                <input value="<?=$colaborador['nome']?>" class="form-control" type="text" name="nome" placeholder="Nome" required>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-asterisk">
                    </span>
                </span>
            </div>
        </div>
        <!-- Form group responsável pelo EMAIL do Colaborador -->
        <div class="form-group">
            <div class="input-group">
                <input class="form-control" type="email" name="email" placeholder="E-mail" required value="<?=$colaborador['email']?>">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-asterisk">
                    </span>
                </span>
            </div>
        </div>
        <!-- Form group responsável pela DATA DE NASCIMENTO do Colaborador -->
        <div class="form-group">
            <div class="input-group">
                <input class="form-control" type="date" name="datanascimento" required value="<?=$colaborador['datanascimento']?>">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-asterisk">
                    </span>
                </span>
            </div>
        </div>
        <!-- Form group responsável pelo TIPO do Colaborador -->
        <div class="form-group">
            <div class="input-group">
                <select class="form-control" name="tipo_id" required>
                    <?php foreach ($tipos as $tipo): ?>
                        <option value="<?=$tipo["id"]?>"
                                <?php
                                    if($tipo['id'] == $colaborador['fk_tipos']):
                                        echo "selected";
                                    endif;
                                ?>
                        >
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
        <input class="btn btn-success btn-lg btn-block" type="submit" value="Editar">
    </form>
</div>
</div>
<?php include "footer.php" ?>
