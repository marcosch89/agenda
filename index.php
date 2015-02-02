<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <title>Meu Sistema</title>
    </head>
    <body>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <h3 class="text-center"><b>Página de Acesso</b></h3>
            <form name="login" method="post" action="login.php">
                    <div class="form-group">
                        <label>Usuario</label>
                        <input type="text" name="usuario" class="form-control" placeholder="Usuario">
                    </div>
                    <div class="form-group">
                        <label>Senha</label>
                        <input type="password" name="senha" class="form-control" placeholder="Senha">
                    </div>
                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-forward"></span>Conectar-se</button>
                </form>
            </div>
        </div>
    </body>
</html>
