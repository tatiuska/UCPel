<?php 
    require_once "dados_conexao.php";

    // Interface procedural
    $conexao = @mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCODEDADOS) or die("Erro ao conectar: " . mysqli_connect_error());

    $conjunto = mysqli_query($conexao, "SELECT SYSDATE() 'SYSDATE'");

    $registro = mysqli_fetch_assoc($conjunto);
    echo $registro["SYSDATE"];

    mysqli_close($conexao);
?>