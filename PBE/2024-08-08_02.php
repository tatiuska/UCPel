<?php 
    // Uso da construção de linguagem exit() em uma função
    function novadivisao($operador1, $operador2) {
        // No caso de uma divisão por zero
        if($operador2 == 0) {
            exit("ERRO: Não é possível fazer divisão por zero.");
        }
        else {
            return $operador1/$operador2;
        }
    }

    echo "O resultado da divisão é: " . novadivisao(5, 0);
?>