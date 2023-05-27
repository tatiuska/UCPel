<?php 
    //Implementação classe Comissionado
    class Comissionado extends Empregado {
        //Atributos
        public $total_vendas;
        public $taxa_comissao;
        public $salario_base;
    
        //Método de cálculo de salário
        public function vencimento(){
            $salario = ($this->salario_base + (($this->total_vendas * $this->taxa_comissao)/100));
            return $salario;
        }
    }
?>