<?php
require_once '../../public/header.php';
require_once '../../public/menu.php';
?>

<div class="col-md-6 col-md-offset-3">

    <form class="form-horizontal" role="form" action="lista.php">
        <h1 class="text-center">Editar Usuario</h1>
        <div class="form-group">
            <label class="col-sm-3 control-label">Nome Completo:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Nome" value="Fulano de tal">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Senha:</label>
            <div class="col-sm-9">
                <input type="password" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Perfil:</label>
            <div class="col-sm-9">
                <select class="form-control">
                    <option>Usuário</option>
                    <option>Admin</option>
                </select>
            </div>
        </div>
        <div class="col-md-6 col-md-offset-3">
            <a href="UserList.php" class="btn btn-success"><i class="fa fa-check-circle"></i>
                Salvar Alterações</a>
            <a href="UserList.php" class="btn btn-warning" role="button"><i class="fa fa-backward"></i>
                    Voltar</a>
        </div>
    </form>
</div>
<?php require_once '../../public/footer.php'; ?>