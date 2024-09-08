<?php 
    // fazendo conexão com banco de dados a partir da extensão PDO
    // optei por alocar os dados da conexão em arquivo separado
    require_once "dados_conexao.php";

    // instância PDO
    try {
        $conn = new PDO(DSN.":host=".SERVIDOR.";dbname=".BANCODEDADOS.";charset=utf8", USUARIO, SENHA);
    } catch(PDOException $e) {
        echo "Erro na conexão com o banco de dados: " . $e->getMessage();
        exit();
    }

    // consulta simples ao banco de dados filmerama (PI-III-A)
    $sql = "SELECT * FROM catalogo";

    $stmt = $conn->query($sql);

    // iterando sobre os resultados
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo $row['nome_filme'] . ", " . $row['ano'] . "<br />";
    }

    // fechando a conexão
    $conn = null;
?>