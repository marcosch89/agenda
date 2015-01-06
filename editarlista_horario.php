<?php
require_once 'restrito.php';
require_once 'header.php';
require_once 'menu.php';
?>

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="table-responsive">
            <h1 class="text-center">Horários Marcados</h1>

            <form>
                <label class="col-sm-3 control-label">Nome Completo:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Nome" value="Fulano de tal">
                </div>
                <label class="col-sm-3 control-label">CPF:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Nome" value="11111111111">
                </div>
                <label class="col-sm-3 control-label">Data:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Nome" value="22/10/2015">
                </div>
                <label class="col-sm-3 control-label">Horário:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Nome" value="08:00">
                </div>
                <label class="col-sm-3 control-label">Médico:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Nome" value="Fulano de tal">
                </div>

            </form>

            <div class="col-md- col-md-offset-4">
                <a href="lista_horario.php" class="btn btn-primary"><i class="fa fa-plus"></i>
                    Salvar Alterações</a>
                <a href="lista_horario.php" class="btn btn-primary" role="button"><i class="fa fa-backward"></i>
                    Voltar</a>

            </div>
        </div>
    </div>
</div>


<?php require_once 'footer.php'; ?>







