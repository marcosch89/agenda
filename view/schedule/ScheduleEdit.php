<?php
require_once '../../public/header.php';
require_once '../../public/menu.php';
require_once '../../control/schedule/ScheduleControl.php';

use control\schedule\ScheduleControl;

$schedule = new ScheduleControl();

$data = $schedule->getOne($_GET);

?>

<div class="col-md-6 col-md-offset-3">

    <form class="form-horizontal" role="form" action="../../control/schedule/ScheduleAction.php" method="POST">
        <h1 class="text-center">Editar Horário</h1>
        <input type="hidden" name="id" value="<?= $data['schedule_id']; ?>">
        <div class="form-group">
            <label class="col-sm-3 control-label">Cliente:</label>
            <div class="col-sm-9">
                <input type="text" name="cliente" class="form-control" value="<?= $data['schedule_client'] ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Horário:</label>
            <div class="col-sm-9">
                <input type="text" name="horario" class="form-control" value="<?= $data['schedule_time'] ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Médico:</label>
            <div class="col-sm-9">
                <select class="form-control" name="medico">
                    <option value="1" selected>Urologista</option>
                    <option value="2" selected>Cirurgião Geral</option>
                    <option value="3" selected>Psicologo</option>
                    <option value="4" selected>Obstetra</option>
                    <option value="5" selected>Açogueiro</option>
                </select>
            </div>
        </div>
        <div class="col-md-6 col-md-offset-3">
            <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i>Salvar Alterações</button>

            <a href="ScheduleList.php" class="btn btn-warning" role="button"><i class="fa fa-backward"></i>
                Voltar</a>
        </div>
    </form>
</div>
<?php require_once '../../public/footer.php'; ?>