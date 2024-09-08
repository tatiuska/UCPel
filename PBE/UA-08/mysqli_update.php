<?php 
    // usando o comando update para modificar dados no banco filmerama
    require_once "dados_conexao.php";

    // usando o mysqli orientado a objetos ao inves do mysqli_connect
    $conn = new mysqli(SERVIDOR, USUARIO, SENHA, BANCODEDADOS);

    // verificando a conexão com o banco de dados
    if(!$conn) {
        die("Falha na conexão: " . mysqli_connect_error());
    }

    // query para atualização de dados
    $sql = "UPDATE catalogo SET nome_filme='Somewhere in Time' WHERE id_cat=23";

    // definição da query de atualização
    if(mysqli_query($conn, $sql)) {
        echo "Registro atualizado com sucesso!";
    } else {
        echo "Erro na atualização do registro: " . mysqli_error($conn);
    }
    
    // fechando a conexão
    mysqli_close($conn);
?>