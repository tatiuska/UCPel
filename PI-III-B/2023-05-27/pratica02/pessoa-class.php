<?php 

    //Criação da classe Pessoa
    class Pessoa {
        
        //Declaração de atributos
        public $nome;
        public $idade;
        public $cpf;
        public $endereco;
        public $telefone;
        public $altura;
        public $peso;
        
        //Método Cálculo IMC
        public function calcImc()
        {
            $imc = $this->peso / ($this->altura * $this->altura);
            return $imc;
        }

    }
?>