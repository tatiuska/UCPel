<?php 
    // Criando uma sessão
    // inicializando a sessão
    session_start();

    // armazenando na sessão
    echo 'Seja bem-vindo, ' . $_SESSION["nomeusuario"] = $_POST["nomeusuario"] . '!';
?>