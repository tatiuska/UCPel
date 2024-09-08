<?php 
    // uso do comando select para mostrar registros do banco de dados filmerama em ordem decrescente
    require_once "dados_conexao.php";

    // PDO
    try {
        $conn = new PDO(DSN.':host='.SERVIDOR.';dbname='.BANCODEDADOS.';charset=utf8', USUARIO, SENHA);
    } catch(PDOException $e) {
        echo "Erro na conexão! " . $e->getMessage();
        exit();
    }

    // consulta ao banco de dados para mostrar registros em ordem decrescente
    $sql = "SELECT * FROM catalogo ORDER BY nome_filme DESC";

    $stmt = $conn->query($sql);

    // imprimindo resultados da consulta
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo $row['id_cat'] . ", " . $row['nome_filme'] . ", " . $row['ano'] . ", " . $row['diretor'] . ", " . $row['duracao'] . ", " . $row['genero'] . "<br />";
    }

    // fechando a conexão
    $conn = null;
?>