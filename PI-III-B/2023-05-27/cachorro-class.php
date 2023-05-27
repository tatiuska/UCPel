<?php 
    //Criação da classe
    class Cachorro {
        //Declaração de atributos
        public $nome;
        public $raca;
        public $cor;
        public $peso;
        public $dono;

        //Método Latir
        public function latir(){
            echo "O cachorro está latindo.\n";
        }

        //Método Comer
        public function comer(){
            echo "O cachorro está comendo.\n";
        }

        //Método Sentar
        public function sentar(){
            echo "O cachorro está sentado.\n";
        }

        //Método Brincar
        public function brincar(){
            echo "O cachorro está brincando.\n";
        }

        //Método Caminhar
        public function caminhar(){
            echo "O cachorro está caminhando.\n";
        }
        
    }
?>