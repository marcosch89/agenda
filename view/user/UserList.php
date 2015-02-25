<?php
require_once '../../public/header.php';
require_once '../../public/menu.php';
require_once '../../control/user/UserControl.php';

use control\user\UserControl;

$user = new UserControl();
?>


<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="table-responsive">
            <h1 class="text-center">Lista de Usuários</h1>
            <a href="/view/user/UserRegister.php" class="btn btn-success"><i class="fa fa-plus-circle"></i>
                Novo Usuário</a><br /><br />
            <table class="table table-hover table-bordered table-responsive table-condensed">
                <thead>

                    <tr>
                        <th> Nome Completo </th>
                        <th> Perfil </th>
                        <th> Editar </th>
                        <th> Excluir </th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($user->getAll() as $value) : ?>
                        <tr>
                            <td> <?= $value['user_name']; ?> </td>
                            <td> <?= $value['user_profile']; ?> </td>
                            <td> <a href="UserEdit.php?id=<?= $value['user_id']; ?>" class="btn btn-warning"><i class="fa fa-pencil fa-2x"></i></a></td>
                            <td> <a href="UserDelete.php?id=<?= $value['user_id']; ?>" class="btn btn-danger"><i class="fa fa-pencil fa-2x"></i></a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>
</div>

<?php
require_once '../../public/footer.php';
