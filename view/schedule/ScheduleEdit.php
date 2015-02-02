<?php
require_once '../../public/header.php';
require_once '../../public/menu.php';
?>

<div class="col-md-6 col-md-offset-3">

    <form class="form-horizontal" role="form" action="ScheduleList.php">
        <h1 class="text-center">Editar Horário</h1>
        <div class="form-group">
            <label class="col-sm-3 control-label">Nome Completo:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Nome" value="Marco">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">CPF:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Nome" value="1233545">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Data:</label>
            <div class="col-sm-9">
                <input type="date" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Horário:</label>
            <div class="col-sm-9">
                <input type="time" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Médico:</label>
            <div class="col-sm-9">
                <select class="form-control">
                    <option>Urologista</option>
                    <option>Cirurgião Geral</option>
                    <option>Psicologo</option>
                    <option>Obstetra</option>
                    <option>Açogueiro</option>
                </select>
            </div>
        </div>
        <div class="col-md-6 col-md-offset-3">
            <a href="ScheduleList.php" class="btn btn-success"><i class="fa fa-check-circle"></i>
                Salvar Alterações</a>
            <a href="ScheduleList.php" class="btn btn-warning" role="button"><i class="fa fa-backward"></i>
                Voltar</a>
        </div>
    </form>
</div>
<?php require_once '../../public/footer.php'; ?>