<?php
require_once '../../public/restrito.php';
require_once '../../public/header.php';
require_once '../../public/menu.php';
?>

<div class="col-md-8 col-md-offset-2">

    <form class="form-horizontal" role="form" action="ClientList.php">
        <h1 class="text-center">Editar Cliente</h1>
        <div class="form-group">
            <label class="col-sm-3 control-label">Nome Completo:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Nome" value="Fulano de tal">
            </div>
        </div>
        <div>
            <div class="form-group">

                <label class="col-sm-3 control-label">Estado:</label>
                <div class="col-sm-9">
                    <select class="form-control" id="estado1"></select><br />
                </div>
                <label class="col-sm-3 control-label"> Cidade:</label>
                <div class="col-sm-9">
                    <select class="form-control" id="cidade1"></select>
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
                <input type="text" class="form-control" placeholder="Endereço" value="0987654567">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Registro Geral:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="RG" value="0987654567">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Estado Civil:</label>
            <div class="col-sm-9">
                <select class="form-control">
                    <option>Solteiro</option>
                    <option>Casado</option>
                    <option>Viúvo</option>
                    <option>Divorciado</option>
                    <option>União Estável</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">C.P.F.:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="CPF" value="3456789">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Telefone:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Telefone" value="9876545678">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Email:</label>
            <div class="col-sm-9">
                <input type="email" class="form-control" placeholder="Email" value="09876@hotmail.com">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Médico Solicitado:</label>
            <div class="col-sm-9">
                <select class="form-control">

                    <option>Urologista</option>
                    <option>Proctologista</option>
                    <option>Dentista</option>
                    <option>Ginecologista</option>
                    <option>Cirurgião Geral</option>
                    <option>Psicólogo</option>

                </select>
            </div>
        </div>
        <h1 class="text-center">Diagnóstico do Paciente</h1>
        <div class="form-group">
            <label class="col-sm-3 control-label">Sintomas:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="sintomas" value="Gripe">
            </div>
        </div>
        <div class="col-md-6 col-md-offset-3">
            <a href="ClientList.php" class="btn btn-success"><i class="fa fa-check"></i>
                Salvar Alterações</a>
            <a href="ClientList.php" class="btn btn-warning"><i class="fa fa-backward"></i>
                Voltar</a>
        </div>
    </form>
</div>
<?php require_once '../../Public/footer.php'; ?>