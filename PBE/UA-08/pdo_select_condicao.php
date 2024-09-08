<?php 
    // uso do comando select para registros específicos com base em uma condição no banco de dados filmerama
    require_once "dados_conexao.php";

    // PDO
    try {
        $conn = new PDO(DSN.':host='.SERVIDOR.';dbname='.BANCODEDADOS.';charset=utf8', USUARIO, SENHA);
    } catch(PDOException $e) {
        echo "Erro na conexão! " . $e->getMessage();
        exit();
    }

    // consulta ao banco de dados com condição (filmes lançados em 1973)
    $sql = "SELECT * FROM catalogo WHERE ano=1973";

    $stmt = $conn->query($sql);

    // imprimindo resultados da consulta
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo $row['id_cat'] . ", " . $row['nome_filme'] . ", " . $row['ano'] . ", " . $row['diretor'] . ", " . $row['duracao'] . ", " . $row['genero'] . "<br />";
    }

    // fechando a conexão
    $conn = null;
?>