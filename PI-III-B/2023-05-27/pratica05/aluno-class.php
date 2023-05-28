<?php 
    //Trabalhando o conceito de encapsulamento
    //Criação classe Aluno
    class Aluno extends Pessoa {
        //Atributo privado
        private $matricula;
        private $nota1;
        private $nota2;

        //Atributo público
        public $curso;

        //Métodos get e set para matrícula
        public function get_matricula(){
            return $this->matricula;
        }

        public function set_matricula($matricula){
            $this->matricula = $matricula;
        }

        //Métodos get e set para nota1
        public function get_nota1(){
            return $this->nota1;
        }

        public function set_nota1($nota1){
            $this->nota1 = $nota1;
        }

        //Métodos get e set para nota2
        public function get_nota2(){
            return $this->nota2;
        }

        public function set_nota2($nota2){
            $this->nota2 = $nota2;
        }

        //Método para calcular a média das notas
        public function mediaNotas(){
            $media = ($this->nota1 + $this->nota2)/2;
            return $media;
        }
    }
?>