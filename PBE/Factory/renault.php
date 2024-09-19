<?php 
    require_once "veiculo.php";

    class Renault implements Veiculo {
        public function modeloCarro()
        {
            return "Duster";
        }
    }
?>