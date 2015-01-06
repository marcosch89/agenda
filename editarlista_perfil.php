<?php
require_once 'restrito.php';
require_once 'header.php';
require_once 'menu.php';
?>

<div class="col-md-6 col-md-offset-3">

    <form class="form-horizontal" role="form" action="lista.php">
        <h1 class="text-center">Dados Pessoais</h1>
        <div class="form-group">
            <label class="col-sm-3 control-label">Nome Completo:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Nome" value="Fulano de tal">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Perfil:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Nome" value="Fulano de tal">
            </div>
        </div>
        <div class="col-md-6 col-md-offset-3">
            <a href="lista_perfil.php" class="btn btn-primary"><i class="fa fa-plus"></i>
                Salvar Alterações</a>
            <a href="lista_perfil.php" class="btn btn-primary" role="button"><i class="fa fa-backward"></i>
                Voltar</a>
        </div>
    </form>
</div>
<?php require_once 'footer.php'; ?>