<?php 
    // chamando os dados para conexão com o banco de dados
    require_once "dados_conexao.php";
    
    // criação da classe Conexao
    class Conexao {
        // variável que armazenará o objeto único
        private static $instancia = false;

        // método construtor da classe Conexao sem código para não ser instanciada imediatamente
        private function __construct() {

        }

        // cria a conexão na primeira requisição, ou retorna o objeto armazenado na instância das requisições seguintes
        public static function getInstance() {
            if(self::$instancia === false) {
                self::$instancia = new PDO(DSN.':host='.SERVER.';dbname='.DATABASE.';charset=utf8', USER, PASSWORD);
            }

            return Conexao::$instancia;
        } 
    }
?>