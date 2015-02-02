<!DOCTYPE html>
<html>
    <head>
        <title>Erro!!</title>
        <meta http-equiv="Content-type" content="text/html;charset=utf-8" >
                <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">

    </head>
    <body>

        <?php
        session_start();

        if (!isset($_SESSION['usuarioSession']) and ! isset($_SESSION['senhaSession'])):
            echo '<h1 class="text-center">Para ter acesso à esta página, você precisa estar logado.</h1> <a href="../../index.php"><h3 class="text-center">Logar</h3></a>';
            die;
        endif;
        ?>

    </body>
</html>