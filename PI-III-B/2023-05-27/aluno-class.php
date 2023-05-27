<?php 
    //Criação da classe Aluno, que herdará atributos e métodos da classe Pessoa
    class Aluno extends Pessoa {
        //Declaração de atributos
        public $matricula;
        public $curso;
        public $nota1;
        public $nota2;
    }

    //Métodos
    public function mediaAluno()
    {
        $media = $nota1 + $nota2 / 2;
    }
?>