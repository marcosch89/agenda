<?php
require_once 'restrito.php';
require_once 'header.php';
require_once 'menu.php';
?>

<div class="col-md-8 col-md-offset-2">
    <form class="form-horizontal">
        <div class="form-group">
            <label class="col-sm-2 control-label">ID</label>
            <div class="col-sm-2">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Horário</label>
            <div class="col-sm-2">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Data</label>
            <div class="col-sm-2">
                <input type="text" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Agendar</button>
            </div>
        </div>
    </form>
</div>



