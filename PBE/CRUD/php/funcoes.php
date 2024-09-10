<?php 
    // chamando os dados para conetar ao banco de dados
    require_once "dados_conexao.php";

    // conexão com o banco de dados via PDO 
    function conecta_bd() {
        $PDO = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8", DB_USER, DB_PASS);
        return $PDO;
    }
?>