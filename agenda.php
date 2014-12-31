<?php
require_once 'restrito.php';
require_once 'header.php';
require_once 'menu.php';
?>

<div class="col-md-8 col-md-offset-2">
    <form class="form-horizontal" action="horario.php">
        <div class="form-group">
            <label class="col-sm-2 control-label">CPF: </label>
            <div class="col-sm-2">
                <input type="number" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Horário: </label>
            <div class="col-sm-2">
                <input type="time" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Data: </label>
            <div class="col-sm-2">
                <input type="date" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">Agendar</button>
            </div>
        </div>
    </form>
</div>



