<?php
require_once 'restrito.php';
require_once 'header.php';
require_once 'menu.php';
?>
<div class="col-md-8 col-md-offset-2">

    <form class="form-horizontal" role="form" action="lista_horario.php">
        <h1 class="text-center">Novo Horário</h1>
        <div class="form-group">
            <label class="col-sm-3 control-label">Nome Completo:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="nome">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">CPF:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="CPF">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Data:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="data">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Horário:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="horário">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Médico:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="médico">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <button type="submit" class="btn btn-success">Cadastrar Horário</button>
            </div>
        </div>
    </form>
</div>
<?php require_once 'footer.php'; ?>