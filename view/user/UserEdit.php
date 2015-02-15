<?php
require_once '../../public/header.php';
require_once '../../public/menu.php';
require_once '../../control/user/UserControl.php';

use control\user\UserControl;

$user = new UserControl();

$data = $user->getOne($_GET);
?>

<div class="col-md-6 col-md-offset-3">

    <form class="form-horizontal" role="form" action="../../control/user/UserAction.php" method="POST">
        <h1 class="text-center">Editar Usuario</h1>
        <input type="hidden" name="id" value="<?= $data['user_id']; ?>">
        <div class="form-group">
            <label class="col-sm-3 control-label">Nome Completo:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="nome" value="<?= $data['user_name'] ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Senha:</label>
            <div class="col-sm-9">
                <input type="password" name="senha" class="form-control" value="<?= $data['user_password'] ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Perfil:</label>
            <div class="col-sm-9">
                <select class="form-control" name="perfil">
                    <option value="1" selected>Usuário</option>
                    <option value="2" selected>Admin</option>
                </select>
            </div>
        </div>
        <div class="col-md-6 col-md-offset-3">
            <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i>Salvar Alterações</button>
            <a href="UserList.php" class="btn btn-warning" role="button"><i class="fa fa-backward"></i>
                Voltar</a>
        </div>
    </form>
</div>
<?php require_once '../../public/footer.php'; ?>