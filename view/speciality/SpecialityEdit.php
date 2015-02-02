<?php
require_once '../../public/header.php';
require_once '../../public/menu.php';
?>

<div class="col-md-6 col-md-offset-3">

    <form class="form-horizontal" role="form" action="SpecialityList.php">
        <h1 class="text-center">Editar Especialidade</h1>
        <div class="form-group">
            <label class="col-sm-3 control-label">Especialidade:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Nome" value="Cirurgiao">
            </div>
        </div>
        <div class="col-md-6 col-md-offset-3">
            <a href="SpecialityList.php" class="btn btn-success"><i class="fa fa-check-circle"></i>
                Salvar Alterações</a>
            <a href="SpecialityList.php" class="btn btn-warning" role="button"><i class="fa fa-backward"></i>
                Voltar</a>
        </div>
    </form>
</div>
<?php require_once '../../public/footer.php'; ?>