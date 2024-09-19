<?php 
    class Factory {
        public function criaVeiculo($veiculo) {
            switch($veiculo) {
                case 'Ford':
                    return new Ford();
                    break;
                case 'Renault':
                    return new Renault();
                    break;
                case 'Chevrolet':
                    return new Chevrolet();
                    break;
            }
        }
    }
?>