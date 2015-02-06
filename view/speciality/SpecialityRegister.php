<?php
require_once '../../public/header.php';
require_once '../../public/menu.php';
?>
<div class="col-md-8 col-md-offset-2">

    <form class="form-horizontal" role="form" action="../../control/speciality/SpecialityAction.php" method="POST">
        <h1 class="text-center">Cadastro de Especialidade</h1>
        <div class="form-group">
            <label class="col-sm-3 control-label">Especialidade Nova:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="nome" placeholder="Especialidade">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i>Cadastrar Especialidade</button>
                <a href="SpecialityList.php" class="btn btn-warning" role="button"><i class="fa fa-backward"></i>
                    Voltar</a>
            </div>
        </div>
    </form>
</div>
<?php require_once '../../public/footer.php'; ?>