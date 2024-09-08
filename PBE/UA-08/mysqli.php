<?php 
    // optei por separar os dados da conexão em outro arquivo
    require_once "dados_conexao.php";

    // criação da conexão usando mysqli_connect()
    // $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

    // versão orientada a objetos da criação da conexão com mysqli
    $conexao = new mysqli(SERVIDOR, USUARIO, SENHA, BANCODEDADOS);

    // verificando se a conexão foi bem-sucedida
    if(!$conexao) {
        die("Falha na conexão: " . mysqli_connect_error());
    }

    echo "Conexão realizada com sucesso!";

    // fechamento da conexão
    mysqli_close($conexao);
?>