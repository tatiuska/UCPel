<?php 
    // Usando declarações preparadas com bindParam
    define("DSN", "mysql");
    define("SERVIDOR", "localhost");
    define("USUARIO", "root");
    define("SENHA", null);
    define("BANCODEDADOS", "mysql");

    $conn = new PDO(DSN.':host='.SERVIDOR.';dbname='.BANCODEDADOS, USUARIO, SENHA);

    // declaração com ponto de interrogação
    $stmt = $conn->prepare('SELECT Column_name, Timestamp 
        FROM columns_priv 
        WHERE Column_name = ? 
        OR Column_name = ?');

    $stmt->bindParam(1, $desc1);
    $stmt->bindParam(2, $desc2);
    $stmt->execute();
?>