<?php 
    // sintaxe para uso do comando delete em um banco de dados
    // conexão com o banco de dados
    $servidor = "localhost";
    $usuario = "usuario_do_banco";
    $senha = "senha_do_banco";
    $banco = "nome_do_banco";

    // criando a conexão
    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    // verificando a conexão
    if(!$conexao) {
        die("Falha na conexão: " . mysqli_connect_error());
    }

    // exclusão de um registro na tabela 'clientes'
    $sql = "DELETE FROM clientes WHERE id=1";

    if($conexao->query($sql) === TRUE) {
        echo "Registro excluído com sucesso!";
    } else {
        echo "Erro ao excluir registro: " . $conexao->error;
    }

    // encerrando a conexão
    $conexao->close();
?>