<?php 
    require_once('autenticacao.php');

    echo "Seja bem-vindo " . $_SESSION['usuario'] . "!<br />";
    echo "Seu e-mail é " . $_SESSION['email'] . ".";
?>