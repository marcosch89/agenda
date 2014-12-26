<!DOCTYPE html>
<html>
    <?php
    session_start();
    require_once 'header.php';

    if (!isset($_SESSION['usuarioSession']) and ! isset($_SESSION['senhaSession'])):
        echo '<h1 class="text-center">Para ter acesso à esta página, você precisa estar logado.</h1> <a href="index.php"><h3 class="text-center">Logar</h3></a>';
        die;
    endif;
    ?>

</html>