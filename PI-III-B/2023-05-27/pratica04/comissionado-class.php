<?php 
    //Criação da classe Comissionado
    class Comissionado implements Empregado {
        //Atributos
        public $nome;
        public $cpf;
        public $salario_base;
        public $taxa_comissao;
        public $total_vendas;

        //Método get para nome
        public function get_nome(){
            return $this->nome;
        }

        //Método get para cpf
        public function get_cpf(){
            return $this->cpf;
        }

        //Método para o cálculo do salário
        public function vencimento(){
            $salario = ($this->salario_base + (($this->total_vendas * $this->taxa_comissao)/100));
            return $salario;
        }
    }
?>