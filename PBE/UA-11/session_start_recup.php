<?php 
    // recuperando os dados da sessão para o mesmo usuário
    session_start();
    echo 'Dados armazenados na sessão: <br /><br />';
    echo 'Usuário: ' . $_SESSION['usuario'] . '<br />';
    echo 'Perfil: ' . $_SESSION['perfil'] . '<br />';
?>