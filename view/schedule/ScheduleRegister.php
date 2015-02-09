<?php
require_once '../../public/header.php';
require_once '../../public/menu.php';
?>
<div class="col-md-8 col-md-offset-2">

    <form class="form-horizontal" role="form" action="../../control/schedule/ScheduleAction.php" method="POST">
        <h1 class="text-center">Novo Horário</h1>
        <div class="form-group">
            <label class="col-sm-3 control-label">Cliente:</label>
            <div class="col-sm-9">
                <input type="text" name="cliente" class="form-control" placeholder="nome">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Médico:</label>
            <div class="col-sm-9">
                <input type="text" name="medico" class="form-control" placeholder="medico">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Horario:</label>
            <div class="col-sm-9">
                <input type="text" name="horario" class="form-control" placeholder="horario">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i>Cadastrar Horário</button>
                <a href="ScheduleList.php" class="btn btn-warning" role="button"><i class="fa fa-backward"></i>
                    Voltar</a>
            </div>
        </div>
    </form>
</div>
<?php require_once '../../public/footer.php'; ?>