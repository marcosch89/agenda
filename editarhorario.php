<?php
require_once 'restrito.php';
require_once 'header.php';
require_once 'menu.php';
?>

<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="table-responsive">
            <h1 class="text-center">Horários Marcados</h1>
            <a href="horario.php" class="btn btn-primary"><i class="fa fa-plus"></i>

                Salvar Alterações</a><br /><br />
            <table class="table table-hover table-bordered table-responsive table-condensed">
                <thead>
                    <tr>
                        <th> Nome Completo </th>
                        <th> CPF </th>
                        <th> Data </th>
                        <th> Hora </th>
                        <th> Médico </th>
                        <th> Voltar </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> Fulano de tal </td>
                        <td> 11111111111</td>
                        <td> 22/10/2015 </td>
                        <td> 08:00 </td>
                        <td> Ciclano de tal</td>
                        <td> <a href="horario.php" class="btn btn-info"><i class="fa fa-backward"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>












