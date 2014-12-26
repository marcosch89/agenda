<?php

session_start();
session_destroy();
//unset($_SESSION['usuarioSession']);
//unset($_SESSION['senhaSession']);

header("location:index.php");