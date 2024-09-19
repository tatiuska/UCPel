<?php 
    // chamando os dados para conexão com o banco de dados
    require_once "dados_conexao.php";
    
    // criação da classe Conexao
    class Conexao {
        public $instancia;

        // método construtor da classe Conexao
        public function __construct()
        {
            // aplicando as constantes no PDO
            if(!isset(self::$instancia)) {
                self::$instancia = new PDO(DSN.':host='.SERVER.';dbname='.DATABASE.';charset=utf8', USER, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            }

            return self::$instancia;
        }

        // instanciação da classe
        public static function getInstancia() {

        }
    }
?>