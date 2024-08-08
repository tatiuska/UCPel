<?php 
    // Criando uma sessão
    // inicializando a sessão
    session_start();

    // armazenando na sessão
    $_SESSION["nomeusuario"] = $_POST["nomeusuario"] . '!';

    // a veriável $_SESSION["nomeusuario"] pode ser usada em qualquer script em que se inicialize o uso de sessões em qualquer outro arquivo
    echo 'Seja bem-vindo, ' . $_SESSION["nomeusuario"] . '!';
?>