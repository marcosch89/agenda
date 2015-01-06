<?php
require_once 'restrito.php';
require_once 'header.php';
require_once 'menu.php';
?>
<div class="col-md-8 col-md-offset-2">

    <form class="form-horizontal" role="form" action="lista_usuario.php">
        <h1 class="text-center">Dados Pessoais</h1>
        <div class="form-group">
            <label class="col-sm-3 control-label">Nome Completo:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="nome">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Perfil:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="perfil">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Senha:</label>
            <div class="col-sm-9">
                <input type="password" class="form-control" placeholder="senha">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <button type="submit" class="btn btn-success">Cadastrar Usuário</button>
            </div>
        </div>
    </form>
</div>
<?php require_once 'footer.php'; ?>