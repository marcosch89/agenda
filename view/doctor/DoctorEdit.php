<?php
require_once '../../public/header.php';
require_once '../../public/menu.php';
require_once '../../control/doctor/DoctorControl.php';

use control\doctor\DoctorControl;

$doctor = new DoctorControl();

$data = $doctor->getOne($_GET);
?>


<div class="col-md-8 col-md-offset-2">
    <form class="form-horizontal" role="form" action="../../control/doctor/DoctorAction.php" method="POST">
        <h1 class="text-center">Editar Médico</h1>
        <input type="hidden" name="id" value="<?= $data['doctor_id']; ?>">
        <div class="form-group">
            <label class="col-sm-3 control-label">Nome Completo:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="nome" value="<?= $data['doctor_name'] ?>">
            </div>
        </div>
        <div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Telefone:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="telefone" value="<?= $data['doctor_phone'] ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Email:</label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" name="email" value="<?= $data['doctor_email'] ?>">
                </div>
            </div>
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
                <input type="text" class="form-control" name="rg" value="<?= $data['doctor_rg'] ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">C.P.F.:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="cpf" value="<?= $data['doctor_cpf'] ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Especialidade:</label>
            <div class="col-sm-9">
                <select class="form-control" name="especialidade">
                    <option value="1" selected>Pediatra</option>
                    <option value="2" selected>Dentista</option>
                    <option value="3" selected>Dermatologista</option>
                    <option value="4" selected>Fisioterapeuta</option>
                    <option value="5" selected>Cardiologista</option>
                </select>
            </div>
        </div>

        <div class="col-md-6 col-md-offset-3">
            <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i>Salvar Alterações</button>
            <a href="DoctorList.php" class="btn btn-warning" role="button"><i class="fa fa-backward"></i>
                Voltar</a>
        </div>
    </form>
</div>
<?php require_once '../../public/footer.php'; 