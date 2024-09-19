<?php 
    require_once "veiculo.php";

    class Ford implements Veiculo {
        public function modeloCarro()
        {
            return "Focus";
        }
    }
?>