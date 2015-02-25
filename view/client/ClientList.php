<?php
require_once '../../public/header.php';
require_once '../../public/menu.php';
require_once '../../control/client/ClientControl.php';

use control\client\ClientControl;

$client = new ClientControl();
?>


<div class="row">   
    <div class="col-md-10 col-md-offset-1">
        <div class="table-responsive">
            <h1 class="text-center">Lista de Clientes</h1>
            <a href="/view/client/ClientRegister.php" class="btn btn-success"><i class="fa fa-plus-circle"></i>
                Novo Cliente</a><br /><br />
            <table class="table table-hover table-bordered table-responsive table-condensed">
                <thead>

                    <tr>
                        <th> ID </th>
                        <th> Nome Completo </th>
                        <th> Estado </th>
                        <th> Cidade </th>
                        <th> Endereço </th>
                        <th> Registro Geral </th>
                        <th> Estado Civil </th>
                        <th> CPF </th>
                        <th> Telefone </th>
                        <th> Email </th>
                        <th> Editar </th>
                        <th> Excluir </th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($client->getAll() as $value) : ?>
                        <tr>
                            <td> <?= $value['client_id']; ?> </td>
                            <td> <?= $value['client_name']; ?> </td>
                            <td> <?= $value['client_state']; ?> </td>
                            <td> <?= $value['client_city']; ?> </td>
                            <td> <?= $value['client_adress']; ?> </td>
                            <td> <?= $value['client_rg']; ?> </td>
                            <td> <?php
                                switch ($value['client_relationship_status']) {
                                    case 1:
                                        echo 'solteiro';
                                        break;
                                    case 2:
                                        echo 'casado';
                                        break;
                                    case 3:
                                        echo 'divorciado';
                                        break;
                                    case 4:
                                        echo 'viúvo';
                                        break;
                                    case 5:
                                        echo 'união estável';
                                        break;
                                    default:
                                        break;
                                }
                                ?> </td>
                            <td> <?= $value['client_cpf']; ?> </td>
                            <td> <?= $value['client_phone']; ?> </td>
                            <td> <?= $value['client_email']; ?> </td>
                            <td> <a href="ClientEdit.php?id=<?= $value['client_id']; ?>" class="btn btn-warning"><i class="fa fa-pencil fa-2x"></i></a></td>
                            <td> <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal" name="removerregistro">

                                    <i class="fa fa-trash fa-1x"></i>
                                </button></td>
                        </tr>
                    <?php endforeach; ?>
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
            <input type="hidden" name="idregistro" value="">
            <div class="modal-body">
                Tem certeza que deseja excluir este cliente?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-danger" id="remove">Remover Cliente</button>
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
require_once '../../public/footer.php';
