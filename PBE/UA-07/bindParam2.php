<?php 
    // Usando declarações preparadas com bindValue
    define("DSN", "mysql");
    define("SERVIDOR", "localhost");
    define("USUARIO", "root");
    define("SENHA", null);
    define("BANCODEDADOS", "mysql");

    $conn = new PDO(DSN.':host='.SERVIDOR.';dbname='.BANCODEDADOS, USUARIO, SENHA);

    // declaração com dois pontos
    $desc1 = 'Host';
    $desc2 = 'User';
    $stmt = $conn->prepare('SELECT Column_name 
        ,Timestamp 
        FROM columns_priv 
        WHERE Column_name = :descricao1 
        OR Column_name = :descricao2')
    ;

    $stmt->bindParam(':descricao1', $desc1, PDO::PARAM_STR);
    $stmt->bindParam(':descricao2', $desc2, PDO::PARAM_STR);
    $stmt->execute();

    // exibe os registros selecionados pela query
    while($registro = $stmt->fetch()) {
        echo $registro["Column_name"] . " - " . 
            $registro["Timestamp"] . " <br>";
    }
?>