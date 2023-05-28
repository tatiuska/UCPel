<?php 
    //Trabalhando o conceito de encapsulamento
    //Criação classe Pessoa
    class Pessoa {
        //Atributos privados
        private $nome;
        private $cpf;
        private $endereco;
        private $telefone;
        private $data_nasc;

        //Atributos públicos
        public $altura;
        public $peso;
    
        //Métodos get e set para o nome
        public function get_nome(){
            return $this->nome;
        }

        public function set_nome($nome){
            $this->nome = $nome;
        }

        //Métodos get e set para cpf
        public function get_cpf(){
            return $this->cpf;
        }

        public function set_cpf($cpf){
            $this->cpf = $cpf;
        }

        //Métodos get e set para endereço
        public function get_endereco(){
            return $this->endereco;
        }

        public function set_endereco($endereco){
            $this->endereco = $endereco;
        }

        //Métods get e set para telefone
        public function get_telefone(){
            return $this->telefone;
        }

        public function set_telefone($telefone){
            $this->telefone = $telefone;
        }

        //Métodos get e set para data de nascimento
        public function get_data_nasc(){
            return $this->data_nasc;
        }

        public function set_data_nasc($data_nasc){
            $this->data_nasc = $data_nasc;
        }

        //Método para cálculo de IMC
        public function calcImc(){
            $imc = $this->peso / ($this->altura * $this->altura);
            return $imc;
        }
    }
?>