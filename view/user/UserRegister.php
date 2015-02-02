<?php
require_once '../../public/header.php';
require_once '../../public/menu.php';
?>
<div class="col-md-8 col-md-offset-2">

    <form class="form-horizontal" role="form" action="UserList.php">
        <h1 class="text-center">Cadastro de Usuários</h1>
        <div class="form-group">
            <label class="col-sm-3 control-label">Nome Completo:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="nome">
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
        <div class="form-group">
            <label class="col-sm-3 control-label">Senha:</label>
            <div class="col-sm-9">
                <input type="password" class="form-control" placeholder="senha">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i>Cadastrar Usuário</button>
                <a href="UserList.php" class="btn btn-warning" role="button"><i class="fa fa-backward"></i>
                    Voltar</a>
            </div>

        </div>

    </form>

</div>

<?php require_once '../../public/footer.php'; ?>