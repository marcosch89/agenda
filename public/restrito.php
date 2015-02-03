<?php

session_start();

if (!isset($_SESSION['usuarioSession']) and ! isset($_SESSION['senhaSession'])):
    echo "
<!DOCTYPE html>
<html>
    <head>
        <title>Erro!!</title>
        <meta charset='utf-8' >
                <link rel='stylesheet' type='text/css' href='../../css/bootstrap.css'>

    </head>
    <body>

            <h1 class='text-center'>Para ter acesso à esta página, você precisa estar logado.</h1> <a href='../../index.php'><h3 class='text-center'>Logar</h3></a>
            
    </body>
</html>
                ";
    die;
endif;