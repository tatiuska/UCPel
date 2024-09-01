<?php 
    require_once "dados_acesso.php";

    function conectaPDO() {
        try {
            $conn = new PDO(DSN . ':host=' . SERVIDOR . ';dbname='.BANCODEDADOS, USUARIO, SENHA);
            return $conn;
        } catch(PDOException $e) {
            echo 'Erro ao conectar com o banco de dados: ' . $e->getMessage();
        }
    }
?>