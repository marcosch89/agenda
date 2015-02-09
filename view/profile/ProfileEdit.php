<?php
require_once '../../public/header.php';
require_once '../../public/menu.php';
require_once '../../control/profile/ProfileControl.php';

use control\profile\ProfileControl;

$profile = new ProfileControl();

$data = $profile->getOne($_GET); 
?>

<div class="col-md-6 col-md-offset-3">

    <form class="form-horizontal" role="form" action="../../control/profile/ProfileAction.php" method="POST">
        <h1 class="text-center">Editar Perfil</h1>
        <input type="hidden" name="id" value="<?= $data['profile_id']; ?>">
        <div class="form-group">
            <label class="col-sm-3 control-label">Perfil:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="perfil" placeholder="Nome" value="<?= $data['profile_description']; ?>">
            </div>
        </div>
        <div class="col-md-6 col-md-offset-3">
            <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i>Salvar Alterações</button>
            <a href="ProfileList.php" class="btn btn-warning" role="button"><i class="fa fa-backward"></i>
                Voltar</a>
        </div>
    </form>
</div>
<?php require_once '../../public/footer.php'; ?>