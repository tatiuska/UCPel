<?php 
    // uso do comando select para mostrar registros do banco de dados filmerama com limite máximo e offset
    require_once "dados_conexao.php";

    // PDO
    try {
        $conn = new PDO(DSN.':host='.SERVIDOR.';dbname='.BANCODEDADOS.';charset=utf8', USUARIO, SENHA);
    } catch(PDOException $e) {
        echo "Erro na conexão! " . $e->getMessage();
        exit();
    }

    // consulta ao banco de dados para mostrar registros pulando um certo número de resultados
    $sql = "SELECT * FROM catalogo LIMIT 10 OFFSET 20";

    $stmt = $conn->query($sql);

    // imprimindo resultados da consulta
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo $row['id_cat'] . ", " . $row['nome_filme'] . ", " . $row['ano'] . ", " . $row['diretor'] . ", " . $row['duracao'] . ", " . $row['genero'] . "<br />";
    }

    // fechando a conexão
    $conn = null;
?>