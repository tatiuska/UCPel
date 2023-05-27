<?php 
    class Horista implements Empregado {
        public $nome;
        public $cpf;
        public $horas_trabalhadas;
        public $preco_hora;

        //Método para o cálculo de vencimento (salário)
        public function vencimento(){
            $salario = ($this->preco_hora * $this->horas_trabalhadas);
            return $salario;
        }
    }
?>