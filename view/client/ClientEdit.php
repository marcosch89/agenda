<?php
require_once '../../public/header.php';
require_once '../../public/menu.php';
require_once '../../control/client/ClientControl.php';

use control\client\ClientControl;

$client = new ClientControl();

$data = $client->getOne($_GET);
?>

<div class="col-md-8 col-md-offset-2">


    <form class="form-horizontal" role="form" action="../../control/client/ClientAction.php " method="POST">
        <h1 class="text-center">Editar Cliente</h1>
        <input type="hidden" name="id" value="<?= $data['client_id']; ?>">
        <div class="form-group">
            <label class="col-sm-3 control-label">Nome Completo:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="cliente" value="<?= $data['client_name'] ?>">
            </div>
        </div>
        <div>
            <div class="form-group">

                <label class="col-sm-3 control-label">Estado:</label>
                <div class="col-sm-9">
                    <select name="estado" class="form-control" id="estado1"></select><br />
                </div>
                <label class="col-sm-3 control-label"> Cidade:</label>
                <div class="col-sm-9">
                    <select name="cidade" class="form-control" id="cidade1"></select>
                </div>
                <script type="text/javascript">
                    new dgCidadesEstados({
                        cidade: document.getElementById('cidade1'),
                        estado: document.getElementById('estado1')
                    })
                </script>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Endereço:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="endereco" value="<?= $data['doctor_adress'] ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Registro Geral:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="RG" value="<?= $data['client_rg'] ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Estado Civil:</label>
            <div class="col-sm-9">
                <select class="form-control" name="estado_civil">
                    <option value="1" selected>Solteiro</option>
                    <option value="1" selected>Casado</option>
                    <option value="1" selected>Viúvo</option>
                    <option value="1" selected>Divorciado</option>
                    <option value="1" selected>União Estável</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">C.P.F.:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="cpf" value="<?= $data['client_cpf'] ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">RG:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="rg" value="<?= $data['client_rg'] ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Telefone:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="telefone" value="<?= $data['client_phone'] ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Email:</label>
            <div class="col-sm-9">
                <input type="email" class="form-control" name="email" value="<?= $data['client_email'] ?>">
            </div>
        </div>
        <div class="col-md-6 col-md-offset-3">
            <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i>Salvar Alterações</button>
            <a href="ClientList.php" class="btn btn-warning" role="button"><i class="fa fa-backward"></i>
                Voltar</a>
        </div>
    </form>
</div>
<?php require_once '../../public/footer.php'; ?>