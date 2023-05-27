<?php 
    //Criação da classe Aluno, que herdará atributos e métodos da classe Pessoa

    class Aluno extends Pessoa {
        //Declaração de atributos
        public $matricula;
        public $curso;
        public $nota1;
        public $nota2;
    
        //Método para calcular a média do aluno
        public function mediaAluno(){
            $media = ($this->nota1 + $this->nota2) / 2;
            return $media;
        }
    }
?>