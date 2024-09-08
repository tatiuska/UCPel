<?php 
    // consulta ao banco de dados por meio do comando select
    require_once "dados_conexao.php";

    // criação da conexão
    $conn = new mysqli(SERVIDOR, USUARIO, SENHA, BANCODEDADOS);

    // verificando a conexão
    if(!$conn) {
        die("Falha na conexão: " . mysqli_connect_error());
    } 

    // consulta com select
    $sql = "SELECT * FROM catalogo";
    $resultado = mysqli_query($conn, $sql);

    // exibindo o resultado na tela
    if(mysqli_num_rows($resultado) > 0) {
        while($row = mysqli_fetch_assoc($resultado)) {
            echo "ID: " . $row['id_cat'] . " - Filme: " . $row['nome_filme'] . " - Ano: " . $row['ano'] . " - Diretor: " . $row['diretor'] . " - Duração: " . $row['duracao'] . " - Gênero: " . $row['genero'] . "<br />";
        }
    } else {
        echo "Nenhum resultado encontrado.";
    }

    // fechando a conexão
    mysqli_close($conn);
?>