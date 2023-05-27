<?php 
    //Criação da classe abstrata Empregado
    abstract class Empregado{
        //Atributos
        public $nome;
        public $cpf;
        public $data_nasc;

        //Utilizando método get - permitido em classes abstratas
        public function get_nome(){
            return $this->nome;
        }

        public function get_cpf(){
            return $this->cpf;
        }

        public function get_data_nasc(){
            return $this->data_nasc;
        }

        //Assinatura da função/método vencimento, para cálculo de salário
        abstract function vencimento();
    }
?>