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
        <title>My System</title>
    </head>
    <body>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1 class="text-center text-danger">
                    <?php
                    if ($_POST):

                        $usuarioLogin = $_POST['usuario'];
                        $senhaLogin = $_POST['senha'];

                        if (empty($usuarioLogin)):
                            echo 'digite seu nome de usuario. <a href="index.php">TRY AGAIN</a>';
                        elseif (empty($senhaLogin)):
                            echo 'digite sua senha. <a href="index.php">TRY AGAIN</a>';
                        else:
                            include_once 'config.php';
                            if ($usuarioLogin == $usuario and $senhaLogin == $senha):
                                echo 'dados corretos';

                                session_start();
                                $_SESSION['usuarioSession'] = $usuarioLogin;
                                $_SESSION['senhaSession'] = $senhaLogin;

                                header("Location: home.php");
                            else:
                                echo 'Erro na autenticação. <br/> <a href="index.php">Tente Novamente</a>';
                            endif;
                        endif;
                    endif;
                    ?>
                </h1>
            </div>
        </div>
    </body>
</html>
