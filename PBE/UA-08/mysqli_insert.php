<?php 
    // usando o comando insert para inserir dados em um banco de dados
    require_once "dados_conexao.php";

    // optei por usar o mysqli orientado a objetos ao invés do mysqli_connect
    $conn = new mysqli(SERVIDOR, USUARIO, SENHA, BANCODEDADOS);

    // verificando se a conexão foi bem-sucedida
    if(!$conn) {
        die("Falha na conexão: " . mysqli_connect_error());
    }

    // definição da query de inserção
    $sql = "INSERT INTO catalogo (nome_filme, ano, diretor, duracao, genero) VALUES ('The Heiress', 1949, 'William Wyler', 115, 'drama')";

    // execução da query
    if(mysqli_query($conn, $sql)) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro na inserção de dados: " . mysqli_error($conn);
    }

    // fechamento da conexão
    mysqli_close($conn);
?>