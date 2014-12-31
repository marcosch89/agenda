<?php
require_once 'restrito.php';
require_once 'header.php';
require_once 'menu.php';
?>


<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="table-responsive">
            <h1 class="text-center">Editar Cliente</h1>
            <a href="lista.php" class="btn btn-success"><i class="fa fa-sign-in"></i>
                Salvar Alterações</a><br /><br />
            <table class="table table-hover table-bordered table-responsive table-condensed">
                <thead>
                    <tr>
                        <th> Nome Completo </th>
                        <th> Estado </th>
                        <th> Cidade </th>
                        <th> Endereço </th>
                        <th> Registro Geral </th>
                        <th> Estado Civil </th>
                        <th> CPF </th>
                        <th> Telefone </th>
                        <th> Email </th>
                        <th> Médico Solicitado </th>
                        <th> Voltar à Lista</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> Fulano de tal </td>
                        <td> RR </td>
                        <td> Boa-Vista</td>
                        <td> Bem ali</td>
                        <td> 222222 </td>
                        <td> Solteiro </td>
                        <td> 123.456.789-10 </td>
                        <td> 1234-1542 </td>
                        <td> batatas@gmail.com </td>
                        <td> Dentista </td>
                        <td> <a href="lista.php" class="btn btn-info"><i class="fa fa-backward"></i></a></td>


                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<?php
require_once 'footer.php';
