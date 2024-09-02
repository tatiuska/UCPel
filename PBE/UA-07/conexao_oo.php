<?php 
    require_once "dados_conexao.php";

    // Interface orientada a objetos
    $conexao = new mysqli(SERVIDOR, USUARIO, SENHA, BANCODEDADOS) or die("Erro ao conectar: " . $conecta->connect_error);

    $query = $conexao->query("SELECT SYSDATE() 'SYSDATE'");
    
    $registro = $query->fetch_assoc();
    echo $registro["SYSDATE"];
    
    $conexao->close();

?>