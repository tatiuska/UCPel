<?php 
    // configurações de conexão com o banco de dados
    $servidor = "localhost";
    $usuario = "usuario_do_banco";
    $senha = "senha_do_banco";
    $banco = "nome_do_banco";

    // criação da conexão
    // $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

    // versão orientada a objetos da criação da conexão
    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    // verificando se a conexão foi bem-sucedida
    if(!$conexao) {
        die("Falha na conexão: " . mysqli_connect_error());
    }

    echo "Conexão realizada com sucesso!";

    // fechamento da conexão
    mysqli_close($conexao);
?>