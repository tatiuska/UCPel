<?php 
    //Criação da classe Horista
    class Horista implements Empregado {
        //Atributos
        public $nome;
        public $cpf;
        public $horas_trabalhadas;
        public $preco_hora;

        //Método get para nome
        public function get_nome(){
            return $this->nome;
        }

        //Método get para cpf
        public function get_cpf(){
            return $this->cpf;
        }

        //Método para o cálculo de vencimento (salário)
        public function vencimento(){
            $salario = ($this->preco_hora * $this->horas_trabalhadas);
            return $salario;
        }
    }
?>