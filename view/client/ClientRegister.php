    <?php
require_once '../../public/header.php';
require_once '../../public/menu.php';
?>
<div class="col-md-8 col-md-offset-2">

    <form class="form-horizontal" role="form" action="../../control/client/ClientAction.php" method="POST">
        <h1 class="text-center">Cadastro de Clientes</h1>
        <div class="form-group">
            <label class="col-sm-3 control-label">Nome Completo:</label>
            <div class="col-sm-9">
                <input type="text" name="nome" class="form-control" placeholder="Nome">
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
                <input type="text" name="endereco" class="form-control" placeholder="Endereço">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Registro Geral:</label>
            <div class="col-sm-9">
                <input type="text" name="rg" class="form-control" placeholder="RG">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Estado Civil:</label>
            <div class="col-sm-9">
                <select class="form-control" name="estado_civil">
                    <option value="1">Solteiro</option>
                    <option value="2">Casado</option>
                    <option value="3">Viúvo</option>
                    <option value="4">Divorciado</option>
                    <option value="5">União Estável</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">C.P.F.:</label>
            <div class="col-sm-9">
                <input type="text" name="cpf" class="form-control" placeholder="CPF">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Telefone:</label>
            <div class="col-sm-9">
                <input type="text" name="telefone" class="form-control" placeholder="Telefone">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Email:</label>
            <div class="col-sm-9">
                <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <button type="submit" class="btn btn-success"><i class="fa fa-check"></i>Cadastrar Cliente</button>
                <a href="ClientList.php" class="btn btn-warning" role="button"><i class="fa fa-backward"></i>
                    Voltar</a>
            </div>
        </div>
    </form>
</div>
<?php require_once '../../public/footer.php';