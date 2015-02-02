<?php
require_once '../../public/header.php';
require_once '../../public/menu.php';
?>


<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="table-responsive">
            <h1 class="text-center">Lista de Usuários</h1>
            <a href="UserRegister.php" class="btn btn-success"><i class="fa fa-plus-circle"></i>
                Novo Usuário</a><br /><br />
            <table class="table table-hover table-bordered table-responsive table-condensed">
                <thead>

                    <tr>
                        <th> Nome Completo </th>
                        <th> Perfil </th>
                        <th> Editar </th>
                        <th> Excluir </th>

                    </tr>
                </thead>
                <tbody>
                    <?php for ($index = 0; $index < 10; $index++) : ?>
                        <tr>
                            <td> Fulano de tal </td>
                            <td> Admin </td>
                            <td> <a href="UserEdit.php" class="btn btn-warning"><i class="fa fa-pencil fa-2x"></i></a></td>
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
                Tem certeza que deseja excluir este usuário?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-danger">Remover Usuário</button>
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
