<?php 
    //Criação classe Horista
    class Horista extends Empregado {
        //Atributos
        public $horas_trabalhadas;
        public $preco_hora;

        //Método para cálculo de salário
        public function vencimento(){
            $salario = ($this->preco_hora * $this->horas_trabalhadas);
            return $salario;
        }
    }
?>