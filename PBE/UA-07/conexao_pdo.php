<?php 
    require_once "dados_conexao_pdo.php";

    // Conexão com o banco de dados via PDO
    try {
        $conn = new PDO(DSN.':host='.SERVIDOR.';dbname='.BANCODEDADOS, USUARIO, SENHA);

        $query = $conn->query("SELECT SYSDATE() 'SYSDATE'");

        $registro = $query->fetch();
        echo $registro["SYSDATE"];
    } catch(PDOException $e) {
        echo 'Erro ao conectar: ' . $e->getMessage();
    }
?>