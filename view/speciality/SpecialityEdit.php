<?php
require_once '../../public/header.php';
require_once '../../public/menu.php';
require_once '../../control/speciality/SpecialityControl.php';

use control\speciality\SpecialityControl;

$speciality = new SpecialityControl();

$data = $speciality->getOne($_GET);
?>

<div class="col-md-6 col-md-offset-3">

    <form class="form-horizontal" role="form" action="../../control/speciality/SpecialityAction.php" method="POST">
        <h1 class="text-center">Editar Especialidade</h1>
        <input type="hidden" name="id" value="<?= $data['speciality_id']; ?>">
        <div class="form-group">
            <label class="col-sm-3 control-label">Especialidade:</label>
            <div class="col-sm-9">
                <input type="text" name="nome" class="form-control" value="<?= $data['speciality_name'] ?>">
            </div>
        </div>
        <div class="col-md-6 col-md-offset-3">
            <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i>Salvar Alterações</button>
            <a href="SpecialityList.php" class="btn btn-warning" role="button"><i class="fa fa-backward"></i>
                Voltar</a>
        </div>
    </form>
</div>
<?php require_once '../../public/footer.php'; ?>