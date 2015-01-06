<?php
require_once 'restrito.php';
require_once 'header.php';
require_once 'menu.php';
?>


<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="table-responsive">
            <h1 class="text-center">Lista de Clientes</h1>
            <a href="cadastro_cliente.php" class="btn btn-primary"><i class="fa fa-sign-in"></i>
                Novo Cliente</a><br /><br />
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
                        <th> Editar </th>
                        <th> Excluir </th>

                    </tr>
                </thead>
                <tbody>
                    <?php for ($index = 0; $index < 10; $index++) : ?>
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
                            <td> <a href="editarlista_cliente.php" class="btn btn-info"><i class="fa fa-pencil fa-2x"></i></a></td>
                            <td> <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal">

                                    <i class="fa fa-trash fa-1x"></i>
                                </button></td>
                        </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
        </div>

    </div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Excluir</h4>
            </div>
            <div class="modal-body">
                Tem certeza que deseja excluir este cliente?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Remover Cliente</button>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12 col-lg-offset-5">
    <ul class="pagination">
        <li>
            <a href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        <li class="active"><a href="">1</a></li>
        <li><a href="">2</a></li>
        <li><a href="">3</a></li>
        <li><a href="">4</a></li>
        <li>
            <a href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</div>
<?php
require_once 'footer.php';
