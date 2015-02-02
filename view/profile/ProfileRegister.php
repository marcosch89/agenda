<?php
require_once '../../public/header.php';
require_once '../../public/menu.php';
?>
<div class="col-md-8 col-md-offset-2">

    <form class="form-horizontal" role="form" action="ProfileList.php">
        <h1 class="text-center">Cadastro de Perfis</h1>
        <div class="form-group">
            <label class="col-sm-3 control-label">Perfil:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="perfil">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i>Cadastrar Perfil</button>
                <a href="ProfileList.php" class="btn btn-warning" role="button"><i class="fa fa-backward"></i>
                    Voltar</a>
            </div>
        </div>
    </form>
</div>
<?php require_once '../../public/footer.php'; ?>