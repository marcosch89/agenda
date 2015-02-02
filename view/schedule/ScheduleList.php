<?php
require_once '../../public/header.php';
require_once '../../public/menu.php';
?>

<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="table-responsive">
            <h1 class="text-center">Lista de Horários Marcados</h1>
            <a href="ScheduleRegister.php" class="btn btn-success"><i class="fa fa-plus-circle"></i>

                Novo Horário</a><br /><br />
            <table class="table table-hover table-bordered table-responsive table-condensed">
                <thead>
                    <tr>
                        <th> Cliente </th>
                        <th> CPF </th>
                        <th> Data </th>
                        <th> Horário </th>
                        <th> Médico </th>
                        <th> Editar </th>
                        <th> Excluir </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> Fulano de tal </td>
                        <td> 11111111111</td>
                        <td> 22/10/2015 </td>
                        <td> 08:00 </td>
                        <td> Ciclano de tal</td>
                        <td> <a href="ScheduleEdit.php" class="btn btn-warning"><i class="fa fa-pencil fa-2x"></i></a></td>
                        <td> <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal">
                                <i class="fa fa-trash fa-1x"></i>
                            </button></td>
                    </tr>
                    <tr>
                        <td> Fulano de tal </td>
                        <td> 11111111111</td>
                        <td> 22/10/2015 </td>
                        <td> 08:00 </td>
                        <td> Ciclano de tal</td>
                        <td> <a href="ScheduleEdit.php" class="btn btn-warning"><i class="fa fa-pencil fa-2x"></i></a></td>
                        <td> <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal">
                                <i class="fa fa-trash fa-1x"></i>
                            </button></td>
                    </tr>
                    <tr>
                        <td> Fulano de tal </td>
                        <td> 11111111111</td>
                        <td> 22/10/2015 </td>
                        <td> 08:00 </td>
                        <td> Ciclano de tal</td>
                        <td> <a href="ScheduleEdit.php" class="btn btn-warning"><i class="fa fa-pencil fa-2x"></i></a></td>
                        <td> <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal">
                                <i class="fa fa-trash fa-1x"></i>
                            </button></td>
                    </tr>
                    <tr>
                        <td> Fulano de tal </td>
                        <td> 11111111111</td>
                        <td> 22/10/2015 </td>
                        <td> 08:00 </td>
                        <td> Ciclano de tal</td>         
                        <td> <a href="ScheduleEdit.php" class="btn btn-warning"><i class="fa fa-pencil fa-2x"></i></a></td>
                        <td> <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal">
                                <i class="fa fa-trash fa-1x"></i>
                            </button></td>
                    </tr>
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
                Tem certeza que deseja excluir este horário?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-danger">Remover Horário</button>
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

<?php require_once '../../public/footer.php'; ?>





